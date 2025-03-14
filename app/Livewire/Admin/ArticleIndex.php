<?php

namespace App\Livewire\Admin;

use App\Models\Article;
use Livewire\Component;

class ArticleIndex extends Component
{
    public function render()
    {
        $articles = Article::all();
        return view('livewire.admin.article-index', compact('articles'));
    }
}
