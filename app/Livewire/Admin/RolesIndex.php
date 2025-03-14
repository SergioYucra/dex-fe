<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\Features\SupportFormObjects\Form;

use Livewire\WithPagination;

class RolesIndex extends Component
{
    use WithPagination;
    
    public $search;

    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $users = User::all();

        return view('livewire.admin.roles-index',compact('users'));
    }
}