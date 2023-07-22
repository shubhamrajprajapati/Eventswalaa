<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $category_id;

    public function deleteCategory($category_id){
        // dd($category_id);
        $this->$category_id = $category_id;
    }
    public function destroyCategory(){
       $categry = Category::find($this->category_id);
       $path = 'uploads/category/'.$category->image;
       if (File::exists($path)) {
        File::delete($path);
       }
       $categry = delete();
    }
    public function render()
    {
        $categories = Category::orderBy('created_at','desc')
        ->where('status', '0')->get();
        // print_r ($categories);
        return view('livewire.admin.category.index', ['categories' => $categories]);
    }
}
