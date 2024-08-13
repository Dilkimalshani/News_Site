<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class CategoryComponent extends Component
{
    public function render()
    {
        $posts = Post::where('category', 'Business')->get();
        return view('livewire.admin.admin-post-component', ['posts' => $posts]);
    }
}
