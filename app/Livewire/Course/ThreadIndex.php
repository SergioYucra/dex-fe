<?php

namespace App\Livewire\Course;

use App\Models\Category;
use App\Models\Thread;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class ThreadIndex extends Component
{
    use WithPagination;

    public $titleSearch;
    public $categorySearch;
    public $userSearch;
    protected $paginationTheme = 'bootstrap';

    public function updatingTitleSearch()
    {
        $this->resetPage();
    }

    public function updatingCategorySearch()
    {
        $this->resetPage();
    }

    public function updatingUserSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $id = Auth::id();
        $categories = Category::all();
        $threads = Thread::with(['user', 'category'])
            ->when($this->titleSearch, function ($query) {
                $query->where('title', 'LIKE', '%' . $this->titleSearch . '%');
            })
            ->when($this->categorySearch, function ($query) {
                $query->where('category_id', $this->categorySearch);
            })
            ->when($this->userSearch, function ($query) {
                $query->whereHas('user', function ($query) {
                    $query->where('name', 'LIKE', '%' . $this->userSearch . '%');
                });
            })
            ->paginate(10);

        return view('livewire.course.thread-index', compact('categories', 'threads', 'id'));
    }
}
