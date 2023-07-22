<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog; 
use App\Models\Blogcategory; 
use Illuminate\Support\Str;
use File;
use App\Http\Requests\BlogFormRequest;

class BlogController extends Controller
{
     public function index(){
        $blogs = Blog::where('status', '0')->get();
        return view('admin.blogdetails.index', compact('blogs'));
     }
     public function create(){
      $blogcategories = Blogcategory::where('status', '0')->get();
      return view('admin.blogdetails.create', compact('blogcategories'));
     }
     
     public function store(BlogFormRequest $request)
     {

            $validatedData = $request->validated();

            $blogs = new Blog;
            $blogs->blogcategory_id = $validatedData['blogcategory_id'];
            $blogs->user_id = $validatedData['user_id'];
            $blogs->name = $validatedData['name'];
            $blogs->slug = Str::slug($validatedData['slug']);
            $blogs->description = $validatedData['description'];

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
    
                $file->move('uploads/blogs/',$filename);
                $blogs->image = $filename;
    
            }

            $blogs->meta_title = $validatedData['meta_title'];
            $blogs->meta_keyword = $validatedData['meta_keyword'];
            $blogs->meta_description = $validatedData['meta_description'];
            $blogs->status = $request->status == true ? '1':'0';

            $blogs->save();
            return redirect()->back()->with('message', 'Blog added successfully !!!');

     }

     public function edit(Blog $blog ){
        $blogcategories = Blogcategory::where('status', '0')->get();
        return view('admin.blogdetails.edit', compact('blogcategories', 'blog'));
     }
     public function update(BlogFormRequest $request, $blog)
     {
        $validatedData = $request->validated();

            $blogs = Blog::findOrFail($blog);
            $blogs->blogcategory_id = $validatedData['blogcategory_id'];
            $blogs->user_id = $validatedData['user_id'];
            $blogs->name = $validatedData['name'];
            $blogs->slug = Str::slug($validatedData['slug']);
            $blogs->description = $validatedData['description'];

            if ($request->hasFile('image')) {

                $path = 'uploads/blogs/'.$blogs->image;
                if (File::exists($path)) {
                    File::delete($path);
                }
    
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
    
                $file->move('uploads/blogs/',$filename);
                $blogs->image = $filename;
    
            }

            $blogs->meta_title = $validatedData['meta_title'];
            $blogs->meta_keyword = $validatedData['meta_keyword'];
            $blogs->meta_description = $validatedData['meta_description'];
            $blogs->status = $request->status == true ? '1':'0';

            $blogs->update();
            return redirect()->back()->with('message', 'Blog updated successfully !!!');
     }

     public function delete($id){
        $blogs = Blog::findOrFail($id);
        $blogs->status = '1';
        $blogs->update();

        return redirect()->back()->with('message', 'Blog deleted successfully !!!');
     }

     public function deletedrecords(){
        $blogs = Blog::where('status', '1')->get();
        return view('admin.blogdetails.delete', compact('blogs'));
     }
     
     public function deletedrestore($id){
        $blogs = Blog::findOrFail($id);
        $blogs->status = '0';
        $blogs->update();
        return redirect()->back()->with('message', 'Record re-store!!!');
     }
}
