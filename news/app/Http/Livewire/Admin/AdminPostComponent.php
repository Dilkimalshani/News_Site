<?php
namespace App\Http\Livewire\Admin;
//namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Livewire\Component;

class AdminPostComponent extends Component
{
    public function deletePost($id)
    {
        $post = Post::find($id);
        $post->delete();
        session()->flash('message', 'Post Deleted');
    }

    public function render()
    {
        // Fetch posts with the category 'Business'
       $posts=Post::all();
        
        // Return the view with the posts data
       return view('livewire.admin.admin-post-component', ['posts' => $posts]);
        
    }
    
   
}
