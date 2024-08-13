<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;


class RightComponent extends Component
{
    public function render()
    {
        $breaking_news = Post::where('breaking_news', 1)->latest()->limit(4)->get();

        return view('livewire.right-component',[
            'breaking_news' => $breaking_news,
            
        ]
    );
    }
}
