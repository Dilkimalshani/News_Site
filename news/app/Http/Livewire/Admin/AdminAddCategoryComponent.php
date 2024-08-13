<?php

namespace App\Http\Livewire\Admin;
use Illuminate\Supports\Str;
use Livewire\Component;
use App\Models\Category;

class AdminAddCategoryComponent extends Component

{
    public $name;
    public $slug;
    public $home_category;
   



    public function generateSlug()
    {
        $this->slug=Str::slug($this->name);
    }


    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required|unique:categories|max:255',
            'slug' => 'required',
            'home_category' => 'required',
        ]);
    }
    

    public function CategoryStore()
    {
        $this->validate([
            'name' => ['required', 'unique:categories', 'max:255'],
            'slug' => 'required',
            'home_category' => 'required',
        ]);
        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->home_category = $this->home_category; // Corrected column name
        $category->save(); // Save the data to the database
        session()->flash('message','Category Added');
       
        return response()->json($category);
    }
    
    public function render()
    {
        return view('livewire.admin.admin-add-category-component');
    }
}
