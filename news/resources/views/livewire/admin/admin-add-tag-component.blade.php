<div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Add Tag</h3>
                    <a href="{{ url('admin/tags') }}" class="btn btn-primary">All Tags</a>
                    @if(session()->has('message'))
                      <div class="alert alert-success" role="alert">{{ session()->get('message') }}</div>
                    @endif
                    <form wire:submit.prevent="TagStore">
                        <div class="form-group">
                            <label for="name">Tag Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Tag Name" wire:model="name" name="name">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="slug">Tag Slug</label>
                            <input type="text" class="form-control" id="slug" placeholder="Tag Slug" wire:model="slug" name="slug">
                            @error('slug')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Status</label>
                            <select class="form-control" id="status" wire:model="status" name="status">
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
