<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductImage;
use Illuminate\Support\Facades\File;
use App\Models\Blogcategory;
use App\Models\Blog;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapXmlController extends Controller
{

    public function index()
    {
        return response()->view('sitemap.index')->header('Content-Type', 'text/xml');
    }

    public function sitemapMainXls()
    {
        return response()->view('sitemap.main-stylesheet')->header('Content-Type', 'text/xls');
    }

    public function frontendSitemap()
    {
        return response()->view('frontend.sitemap.index')->header('Content-Type', 'text/xml');
    }

    public function home(Request $request)
    {
        return response()->view('frontend.sitemap.home')->header('Content-Type', 'text/xml');
    }

    public function searchPages()
    {
        return response()->view('frontend.sitemap.search-pages')->header('Content-Type', 'text/xml');
    }

    public function businessPages()
    {
        return response()->view('frontend.sitemap.business-pages')->header('Content-Type', 'text/xml');
    }

    public function legalPages()
    {
        return response()->view('frontend.sitemap.legal-pages')->header('Content-Type', 'text/xml');
    }

    public function aboutUsPages()
    {
        return response()->view('frontend.sitemap.about-us-pages')->header('Content-Type', 'text/xml');
    }

    public function contactPages()
    {
        return response()->view('frontend.sitemap.contact-pages')->header('Content-Type', 'text/xml');
    }

    public function faqPages()
    {
        return response()->view('frontend.sitemap.faq-pages')->header('Content-Type', 'text/xml');
    }

    public function eventPages()
    {
        return response()->view('frontend.sitemap.event-pages')->header('Content-Type', 'text/xml');
    }

    public function eventTypes()
    {
        $eventTypes = Category::where('status', '0')->get(['slug', 'updated_at']);
        return response()->view('frontend.sitemap.event-types', compact('eventTypes'))->header('Content-Type', 'text/xml');
    }

    public function venues()
    {
        // $postsitmap = Sitemap::create();

        // $venues = Product::leftJoin('categories', 'categories.id', '=', 'products.category_id')->latest('products.created_at')->get(['products.name', 'products.slug', 'categories.slug as category_slug', 'products.updated_at'])
        //     ->each(function (Product $post) use ($postsitmap) {
        //         $postsitmap->add(
        //             Url::create("/post/{$post->slug}")
        //                 ->setPriority(0.9)
        //                 ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        //         );
        //     });;

        // $postsitmap->writeToFile(public_path('/sitemap/venues.xml'));

        $venues = Product::latest()->get(['name', 'slug', 'category_id', 'updated_at']);
        return response()->view('frontend.sitemap.venues', compact('venues'))->header('Content-Type', 'text/xml');
    }

    public function blogCategories()
    {
        $blogCategories = Blogcategory::where('status', '0')->get(['slug', 'updated_at']);
        return response()->view('frontend.sitemap.blog-categories', compact('blogCategories'))->header('Content-Type', 'text/xml');
    }

    public function blogPosts()
    {
        $blogPosts = Blog::leftJoin('blogcategories', 'blogcategories.id', '=', 'blogs.blogcategory_id')->get(['blogs.name', 'blogs.slug', 'blogcategories.slug as category_slug', 'blogs.updated_at']);
        return response()->view('frontend.sitemap.blog-posts', compact('blogPosts'))->header('Content-Type', 'text/xml');
    }
}
