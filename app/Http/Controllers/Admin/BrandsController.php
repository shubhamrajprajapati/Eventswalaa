<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use Validator;
use Illuminate\Support\Str;
use App\Http\Requests\BrandFormRequest;

class BrandsController extends Controller
{
     public function index(){
        $brands = Brand::where('status','0')->get();
        return view('admin.brands.index', compact('brands'));
     }
     public function create(){
      $category = Category::where('status', '0')->get();
        return view ('admin.brands.create', compact('category'));
     }
     public function store(BrandFormRequest $request)
     {
        // php artisan make:request BrandFormRequest
        $validatedData = $request->validated();
        $brand = new Brand();
        $brand->category_id = $validatedData['category_id'];
        $brand->name = $validatedData['name'];
        $brand->slug = Str::slug($validatedData['slug']);
        $brand->status = $request->status == true ? '1' : '0';
        $brand->save();
        return redirect()->back()->with('message', 'Data added successfully !!');
     } 
     public function edit(Brand $brand){
         $category = Category::where('status', '0')->get();
         return view('admin.brands.edit', compact('brand', 'category'));
     }
     public function update(BrandFormRequest $request, $brand)
     {
        $validatedData = $request->validated();
        $brand = Brand::findOrFail($brand);
        $brand->category_id = $validatedData['category_id'];
        $brand->name = $validatedData['name'];
        $brand->slug = Str::slug($validatedData['slug']);
        $brand->status = $request->status == true ? '1' : '0';
        $brand->update();
        return redirect()->back()->with('message', 'Data updated successfully !!');

     }
     public function delete($id){
        $brands = Brand::find($id);
        $brands->status = '1';
        $brands->update();
        return redirect()->back()->with('message', 'Data deleted successfully ');

     }

     public function deletedrecords(){
        $brands = Brand::where('status', '1')->get();
        return view('admin.brands.delete', compact('brands'));

     }
     public function deletedrestore($id){
        $brands = Brand::find($id);
        $brands->status = '0';
        $brands->update();
        return redirect()->back()->with('message', 'Data Re-store');
     }
}
