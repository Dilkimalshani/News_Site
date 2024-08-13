<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tag;

class TagComponent extends Component
{
    public function render()
    {
        $tags=Tag::where('status',1)->get();
        return view('livewire.tag-component',['tags'=>$tags]);
    }
}
