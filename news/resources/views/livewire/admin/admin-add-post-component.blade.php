<div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Add Post</h3>
                    <a href="{{ route('admin.posts') }}" class="btn btn-primary">All Posts</a>
                    @if(session()->has('message'))
                      <div class="alert alert-success" role="alert">{{ session()->get('message') }}</div>
                    @endif
                    <form wire:submit.prevent="postStore">

                        <div class="form-group">
                            <label for="category_name">Category Name</label>
                            <select class="form-control" name="category_id" wire:model="category_id">
                                <option value="0">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tag_name">Tag Name</label>
                            <select class="form-control" name="tag_id" wire:model="tag_id">
                                <option value="0">Select Tag</option>
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                            </select>
                            @error('tag_id')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Post Title" wire:model="title" name="title">
                            @error('title')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="slug">Post Slug</label>
                            <input type="text" class="form-control" id="slug" placeholder="Post Slug" wire:model="slug" name="slug">
                            @error('slug')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="short_desc">Short Description</label>
                            <textarea class="form-control" placeholder="Short Description" wire:model="short_desc"></textarea>
                            @error('short_desc')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="long_desc">Long Description</label>
                            <textarea class="form-control" placeholder="Long Description" wire:model="long_desc"></textarea>
                            @error('long_desc')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="slider_news">Slider News</label>
                            <select class="form-control" name="slider_news" wire:model="slider_news">
                                <option value="0">Select Please</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                            @error('slider_news')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="breaking_news">Breaking news</label>
                            <select class="form-control" name="breaking_news" wire:model="breaking_news">
                                <option value="0">Select Please</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                            @error('breaking_news')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="featured_news">Featured News</label>
                            <select class="form-control" name="featured_news" wire:model="featured_news">
                                <option value="0">Select Please</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                            @error('featured_news')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="popular_news">Popular News</label>
                            <select class="form-control" name="popular_news" wire:model="popular_news">
                                <option value="0">Select Please</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                            @error('popular_news')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" name="status" wire:model="status">
                                <option value="0">Select Please</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                            @error('status')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                       
                       

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
