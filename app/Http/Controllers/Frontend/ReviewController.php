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

class ReviewController extends Controller
{
     public function add($product_slug){
        $product = Product::where('slug', $product_slug)->where('status', '0')->first();

        return view('frontend.reviews.index', compact('product'));
        // if ( $product) {
        //     $product_id = $product->id;
        // }
        // else{
        //     return redirect()->back()->with('ratingmessage', 'The link you followed was broken !!');
        // }
     }
}
