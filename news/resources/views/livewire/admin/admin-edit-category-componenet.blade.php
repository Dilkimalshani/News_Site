<div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Edit Category</h3>
                    <a href="{{ route('admin.categories') }}" class="btn btn-primary">All Categories</a>
                    @if(session()->has('message'))
                      <div class="alert alert-success" role="alert">{{ session()->get('message') }}</div>
                    @endif
                    <form wire:submit.prevent="UpateCategory">
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Category Name" wire:model="name" name="name">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="slug">Category Slug</label>
                            <input type="text" class="form-control" id="slug" placeholder="Category Slug" wire:model="slug" name="slug">
                            @error('slug')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="home_category">Home Category</label>
                            <select class="form-control" id="home_category" wire:model="home_category" name="home_category">
                                <option value="0">Select Please</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                            @error('home_category')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
