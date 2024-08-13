<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class WorldComponent extends Component
{
    public function render()
    {
        $category_id = 8; 

        
        $breaking_news = Post::where('breaking_news', 1)
                             ->where('category_id', $category_id)
                             ->latest()
                             ->limit(4)
                             ->get();

       
        $posts = Post::where('status', 1)
                     ->where('category_id', $category_id)
                     ->get();

        return view('livewire.world-component', [
            'breaking_news' => $breaking_news,
            'posts' => $posts,
        ]);
    }
}
