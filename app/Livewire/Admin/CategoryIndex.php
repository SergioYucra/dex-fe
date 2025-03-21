<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class CategoryIndex extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.category-index',compact('categories'));
    }
}
