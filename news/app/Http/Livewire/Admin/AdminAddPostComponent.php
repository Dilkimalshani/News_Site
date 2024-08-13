<?php
namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use Auth;
use Carbon\Carbon;

class AdminAddPostComponent extends Component
{
    use WithFileUploads;

    public $category_id;
    public $tag_id;
    public $title;
    public $slug;
    public $short_desc;
    public $long_desc;
    public $status;
    public $slider_news;
    public $breaking_news;
    public $featured_news;
    public $popular_news;
    //public $image;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->title);
    }

    protected $rules = [
        'title' => 'required|unique:posts|max:255',
        'slug' => 'required',
        'category_id' => 'required',
        'tag_id' => 'required',
        'short_desc' => 'required',
        'long_desc' => 'required',
        'status' => 'required',
        'slider_news' => 'required',
        'breaking_news' => 'required',
        'featured_news' => 'required',
        'popular_news' => 'required',
       // 'image' => 'required|image',
    ];

    public function updated($field)
    {
        $this->validateOnly($field, $this->rules);
    }

    public function postStore()
    {
        $this->validate($this->rules);

        $post = new Post();
        $post->user_id = Auth::id();
        $post->title = $this->title;
        $post->slug = $this->slug;
        $post->category_id = $this->category_id;
        $post->tag_id = $this->tag_id;
        $post->short_desc = $this->short_desc;
        $post->long_desc = $this->long_desc;
        $post->status = $this->status;
        $post->slider_news = $this->slider_news;
        $post->breaking_news = $this->breaking_news;
        $post->featured_news = $this->featured_news;
        $post->popular_news = $this->popular_news;

        // Store the uploaded image using the 'local' disk
       // $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        //$this->image->storeAs('public/posts', $imageName); // 'public' disk corresponds to the 'local' disk driver

       // $post->image = $imageName;
        $post->save();

        session()->flash('message', 'Post Added');

        return response()->json($post);
    }

    public function render()
    {
        $categories = Category::all();
        $tags = Tag::where('status', 1)->get();
        return view('livewire.admin.admin-add-post-component', ['categories' => $categories, 'tags' => $tags]);
    }
}
