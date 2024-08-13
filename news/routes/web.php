<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\SigleComponent;
use App\Http\Livewire\LocalComponent; 
use App\Http\Livewire\WorldComponent;
use App\Http\Livewire\BusinessComponent;
use App\Http\Livewire\SportComponent;
use App\Http\Livewire\PoliticsComponent;
use App\Http\Livewire\WeatherComponent;
use App\Http\Livewire\EducationComponent;

use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponenet;
use App\Http\Livewire\Admin\AdminTagComponent;
use App\Http\Livewire\Admin\AdminAddTagComponent;
use App\Http\Livewire\Admin\AdminPostComponent;
use App\Http\Livewire\Admin\AdminAddPostComponent;




use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});




Route::get('/home',HomeComponent::class)->name('home.index');
Route::get('/category',CategoryComponent::class)->name('category');
Route::get('/contact',ContactComponent::class)->name('contact');
//Route::get('/single', SingleComponent::class)->name('single');
Route::get('/local',LocalComponent::class)->name('local');
Route::get('/world',WorldComponent::class)->name('world');
Route::get('/business',BusinessComponent::class)->name('business');
Route::get('/sport',SportComponent::class)->name('sport');
Route::get('/politics',PoliticsComponent::class)->name('politics');
Route::get('/weather', WeatherComponent::class)->name('weather');
Route::get('/education', EducationComponent::class)->name('education');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //category route
    Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.category.add');
    Route::get('/admin/category/edit/{category_id}',AdminEditCategoryComponenet::class)->name('admin.category.edit');
   
  //tag route
    Route::get('/admin/tags',AdminTagComponent::class)->name('admin.tags');
    Route::get('/admin/tag/add',AdminAddTagComponent::class)->name('admin.tags');

  //post route
  Route::get('/admin/posts',AdminPostComponent::class)->name('admin.posts');
  Route::get('/admin/posts/add',AdminAddPostComponent::class)->name('admin.post.add');
 // Route::get('/admin/posts', [AdminPostController::class, 'category']);


    
});

require __DIR__.'/auth.php';


