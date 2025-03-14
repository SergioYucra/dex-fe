<?php

namespace App\Livewire\Admin;

use App\Models\Note;
use Livewire\Component;

class NoteIndex extends Component
{
    public $data;

    public function mount($data = null)
    {
        $this->data = $data;
    }

    public function render()
    {
        $notes = Note::where('video_id', $this->data)->get();
        return view('livewire.admin.note-index', compact('notes'));
    }
}
