<?php

namespace App\Livewire\Admin;

use App\Models\Video;
use Livewire\Component;

class VideoIndex extends Component
{
    public $data;

    public function mount($data = null)
    {
        $this->data = $data;
    }

    public function render()
    {
        $videos = Video::where('topic_id', $this->data)->get();
        return view('livewire.admin.video-index',compact('videos'));
    }
}
