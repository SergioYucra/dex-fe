<?php

namespace App\Livewire\Admin;

use App\Models\Tema;
use App\Models\Topic;
use Livewire\Component;

class TopicIndex extends Component
{
    public $data;

    public function mount($data = null)
    {
        $this->data = $data;
    }

    public function render()
    {
        $topics = Topic::where('course_id', $this->data)->get();
        return view('livewire.admin.topic-index',compact('topics'));
    }
}
