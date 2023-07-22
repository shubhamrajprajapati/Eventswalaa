<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryFormRequest;
use Illuminate\Support\Str;
use App\Models\Category;
use Validator;
use Illuminate\Support\Facades\File;

use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
     public function index(){
        return view('admin.category.index');
     }
     public function create(){
        return view('admin.category.create');
     }
     public function store(CategoryFormRequest $request)
     {
      $validatedData = $request->validated();

      $category = new Category;
      $category->name = $validatedData['name'];
      $category->slug = Str::slug($validatedData['slug']);
      $category->description = $validatedData['description'];
      
      $uploadPath = 'uploads/category/';
      if ($request->hasFile('image')) {
         $file = $request->file('image');
         $ext = $file->getClientOriginalExtension();
         $filename = time().'.'.$ext;

         $file->move('uploads/category/',$filename);
         $category->image = $uploadPath.$filename;
         
      }

      $category->meta_title = $validatedData['meta_title'];
      $category->meta_keyword = $validatedData['meta_keyword'];
      $category->meta_description = $validatedData['meta_description'];
      $category->status = $request->status == true ? '1' : '0';

      $category->save();

      return redirect('admin/category/create')->with('message','Category added successfully !!');
     }

     public function edit(Category $category)
     {
         return view('admin.category.edit', compact('category'));
     }
     public function update(CategoryFormRequest $request, $category)
     {
      $validatedData = $request->validated();
      $category = Category::findOrFail($category);
      $category->name = $validatedData['name'];
      $category->slug = Str::slug($validatedData['slug']);
      $category->description = $validatedData['description'];
      
      $uploadPath = 'uploads/category/';
      if ($request->hasFile('image')) {

         $path = 'uploads/category/'.$category->image;
         if (File::exists($path)) {
            File::delete($path);
         }

         $file = $request->file('image');
         $ext = $file->getClientOriginalExtension();
         $filename = time().'.'.$ext;

         $file->move('uploads/category/',$filename);
         $category->image = $uploadPath.$filename;
         
      }

      $category->meta_title = $validatedData['meta_title'];
      $category->meta_keyword = $validatedData['meta_keyword'];
      $category->meta_description = $validatedData['meta_description'];
      $category->status = $request->status == true ? '1' : '0';

      $category->update();

      return redirect('admin/category')->with('message','Category Updated successfully !!');

     }
   
   public function delete($id)
   {
       $category = Category::find($id);
       $category->status='1'; 
       $category->update();
       return redirect()->back()->with('message','Category Deleted Successfully');
   }

   public function deletedrecords(){
      $categories = Category::where('status','1')->get();
      return view('admin.category.delete', compact ('categories'));
   }
   public function deletedrestore($id){
      $category = Category::find($id);
      $category->status='0'; 
      $category->update();
      return redirect()->back()->with('message', 'Data Re-Stored');
   }
}
