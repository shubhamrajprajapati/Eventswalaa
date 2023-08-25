<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;
use App\Models\Blogcategory;
use Illuminate\Support\Str;
use File;
use App\Http\Requests\BlogFormRequest;

class BlogController extends Controller
{
    public function categories()
    {
        $blogcategories = Blogcategory::where('status', '0')->get();
        return view('frontend.blog.category.index', compact('blogcategories'));
    }

    public function blogdata($category_slug)
    {

        $blogcategory = Blogcategory::where('slug', $category_slug)->first();

        if ($blogcategory) {

            $blogsdata = $blogcategory->blogs()->get();
            return view('frontend.blog.blogs.index', compact('blogcategory', 'blogsdata',));
        } else {
            return redirect()->back();
        }
    }

    public function blogView(string $category_slug, string $blog_slug)
    {

        $blogcategory = Blogcategory::where('slug', $category_slug)->first();

        if ($blogcategory) {

            $blogsdata = $blogcategory->blogs()->where('slug', $blog_slug)->where('status', '0')->first();

            if ($blogsdata) {
                return view('frontend.blog.blogs.blogview', compact('blogcategory', 'blogsdata'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
}
