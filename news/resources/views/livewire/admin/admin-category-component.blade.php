<div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Admin Categories</h3>
                    <a href="{{ route('admin.category.add') }}" class="btn btn-primary">Add Category</a>
                    @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message') }}</div>
                    @endif

                    <div class="card">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Home Category</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <th scope="row">{{ $category->id }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>{{ $category->home_category == 1 ? 'Yes' : 'No' }}</td>
                                    <td>
                                        <a href="# {{route('admin.category.edit',['category_id'=>$category->id])}}" class="btn btn-info">Edit</a>
                                        <a href="#" onclick="confirm('Are you sure you want to delete this category?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{$category->id}})" class="btn btn-danger">Delete</a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
