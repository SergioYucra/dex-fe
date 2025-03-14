<?php

namespace App\Livewire\Course;

use App\Models\Article;
use App\Models\Category;
use Livewire\WithPagination;
use Livewire\Component;

class BlogIndex extends Component
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
        $categories = Category::all();

        $articles = Article::query()
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

        return view('livewire.course.blog-index', compact('articles', 'categories'));
    }
}
