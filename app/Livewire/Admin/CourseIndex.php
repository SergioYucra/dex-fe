<?php

namespace App\Livewire\Admin;

use App\Models\Course;
use Livewire\Component;

class CourseIndex extends Component
{
    public function render()
    {
        $courses = Course::all();
        return view('livewire.admin.course-index',compact('courses'));
    }
}
