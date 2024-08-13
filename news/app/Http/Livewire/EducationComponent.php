<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;


class EducationComponent extends Component
{
    public function render()
    {
    $category_id = 6; 

    
    $breaking_news = Post::where('breaking_news', 1)
                         ->where('category_id', $category_id)
                         ->latest()
                         ->limit(4)
                         ->get();

   
    $posts = Post::where('status', 1)
                 ->where('category_id', $category_id)
                 ->get();

    return view('livewire.education-component', [
        'breaking_news' => $breaking_news,
        'posts' => $posts,
    ]);
}

}
