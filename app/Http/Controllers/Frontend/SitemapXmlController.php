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
use App\Models\Rating;

class SitemapXmlController extends Controller
{
    
    public function index() {
        return response()->view('sitemap.index')->header('Content-Type', 'text/xml');
      }

      public function product()
{
    $products= Product::latest()->get();
    return response ()->view ('sitemap.product', [
        'products' => $products,
    ])->header ('Content-Type', 'text/xml');
}

public function faqs()
{
    $FAQ = FAQt::active()->orderBy('updated_at', 'desc')->get();
    return response()->view('sitemap.FAQ', [
        'FAQ' => $FAQ,
    ])->header('Content-Type', 'text/xml');
}

public function inquiry()
{
    $FAQ = inquiry ::active()->orderBy('updated_at', 'desc')->get();
    return response()->view('sitemap.inquiry ', ['inquiry ' => $inquiry,
    ])->header('Content-Type', 'text/xml');
}
      
}
