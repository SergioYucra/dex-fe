<?php

namespace App\Livewire\Course;

use App\Models\Category;
use App\Models\Course;
use App\Models\UserCourse;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class LearningIndex extends Component
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
        $id = Auth::id();
        $enrolled = UserCourse::where('user_id', $id)->get();
        $courses = Course::query()->whereIn('id', $enrolled->pluck('course_id'))->when($this->titleSearch, function ($query) {
            $query->where('title', 'LIKE', '%' . $this->titleSearch . '%');
        })->when($this->categorySearch, function ($query) {
            $query->where('category_id', $this->categorySearch);
        })->when($this->userSearch, function ($query) {
            $query->whereHas('user', function ($query) {
                $query->where('name', 'LIKE', '%' . $this->userSearch . '%');
            });
        })->paginate();

        return view('livewire.course.learning-index', compact('courses', 'categories' ));
    }
}
