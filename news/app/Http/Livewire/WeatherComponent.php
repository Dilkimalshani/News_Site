<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class WeatherComponent extends Component
{
    public function render()
    {
        $category_id = 9; 

        
        $breaking_news = Post::where('breaking_news', 1)
                             ->where('category_id', $category_id)
                             ->latest()
                             ->limit(4)
                             ->get();

       
        $posts = Post::where('status', 1)
                     ->where('category_id', $category_id)
                     ->get();

        return view('livewire.weather-component', [
            'breaking_news' => $breaking_news,
            'posts' => $posts,
        ]);
    }
}
