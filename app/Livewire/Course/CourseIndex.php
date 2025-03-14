<?php

namespace App\Livewire\Course;

use App\Models\Course;
use Livewire\Component;

use Livewire\WithPagination;

class CourseIndex extends Component
{
    use WithPagination;

    public $search;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $courses = Course::where('title', 'LIKE', '%' . $this->search . '%')
            ->paginate();
        return view('livewire.course.course-index',compact('courses'));
    }
}
