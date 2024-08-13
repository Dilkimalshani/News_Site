<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;


class HomeComponent extends Component
{
    public function render()
    {
        $slider_news = Post::where('slider_news', 1)->get();
        $breaking_news = Post::where('breaking_news', 1)->latest()->limit(4)->get();
        $featured_news = Post::where('featured_news', 1)->get();
        $popular_news = Post::where('popular_news', 1)->latest()->limit(10)->get();
        $tags=Tag::where('status',1)->get();
        $users=User::where('name',1)->get();


        return view('livewire.home-component', [
            'slider_news' => $slider_news,
            'breaking_news' => $breaking_news,
            'featured_news' => $featured_news,
            'popular_news' => $popular_news,
            'tags'=> $tags,
            'users'=>$users,

        ]);
        return view('livewire.footer-component', [
            'popular_news' => $popular_news,
            
        ]);
        
    }
}

