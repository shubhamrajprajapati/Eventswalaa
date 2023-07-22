<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogcategory; 
use App\Http\Requests\BlogcategoryFormRequest;
use Illuminate\Support\Str;
use File;

class BlogcategoryController extends Controller
{
    public function index(){
        $blogcategories = Blogcategory::where('status', '0')->get();
        return view('admin.blogs.index', compact('blogcategories'));
    }
 
    public function create(){
        return view('admin.blogs.create'); 
    }
    public function store(BlogcategoryFormRequest $request)
    {
        $validatedData = $request->validated();
        $blogcategory = new Blogcategory;
        $blogcategory->name = $validatedData['name'];
        $blogcategory->slug = Str::slug($validatedData['slug']);
        $blogcategory->description = $validatedData['description'];

        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/blogcategory/',$filename);
            $blogcategory->image = $filename;

        }
        $blogcategory->meta_title = $validatedData['meta_title'];
        $blogcategory->meta_keyword = $validatedData['meta_keyword'];
        $blogcategory->meta_description = $validatedData['meta_description'];
        $blogcategory->status = $request->status == true ? '1':'0';
        $blogcategory->save();
        return redirect()->back()->with('message', 'Category added successfully !!!');
    }
    
    public function edit(Blogcategory $blogcategory)
    {
        // return $blogcategory;
        return view('admin.blogs.edit', compact('blogcategory'));
    }

    public function update(BlogcategoryFormRequest $request, $blogcategory)
    {

        $validatedData = $request->validated();

        $blogcategory = Blogcategory::findOrFail($blogcategory);

        $validatedData = $request->validated();

        $blogcategory->name = $validatedData['name'];
        $blogcategory->slug = Str::slug($validatedData['slug']);
        $blogcategory->description = $validatedData['description'];

        if ($request->hasFile('image')) {

            $path = 'uploads/blogcategory/'.$blogcategory->image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/blogcategory/',$filename);
            $blogcategory->image = $filename;

        }
        $blogcategory->meta_title = $validatedData['meta_title'];
        $blogcategory->meta_keyword = $validatedData['meta_keyword'];
        $blogcategory->meta_description = $validatedData['meta_description'];
        $blogcategory->status = $request->status == true ? '1':'0';
        $blogcategory->update();
        return redirect()->back()->with('message', 'Category updated successfully !!!');
    }

    public function delete($id)
    {
        $blogcategory = Blogcategory::findOrFail($id);
        $blogcategory->status = '1';
        $blogcategory->update();

        return redirect()->back()->with('message', 'Category deleted succeffully !!!');
    }

    public function deletedrecords(){
        $blogcategories = Blogcategory::where('status', '1')->get();
        return view('admin.blogs.delete', compact('blogcategories'));
    }

    public function deletedrestore($id){
        $blogcategories = Blogcategory::findOrFail($id);
        $blogcategories->status = '0';
        $blogcategories->update();
        return redirect()->back()->with('message', 'Data restore !!!');
    }
}
