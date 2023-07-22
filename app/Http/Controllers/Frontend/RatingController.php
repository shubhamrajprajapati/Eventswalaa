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

class RatingController extends Controller
{
    public function add(Request $request){
        $stars_rated = $request->input('product_rating');
        $product_id = $request->input('product_id');
        $star_heading = $request->input('star_heading');
        $star_description = $request->input('star_description');

        $product_check = Product::where('id', $product_id)->where('status','0')->first();

        if($product_check) {

          $existing_rating =  Rating::where('user_id', Auth::id())->where('prod_id', $product_id )->first();

            if ($existing_rating) {
                $existing_rating->stars_rated = $stars_rated;
                $existing_rating->star_heading = $star_heading;
                $existing_rating->star_description = $star_description;

                $existing_rating->update();
            }
            else{
                    Rating::create([
                        'user_id' => Auth::id(),
                        'prod_id' =>  $product_id,
                        'stars_rated' => $stars_rated,
                        'star_heading' => $star_heading,
                        'star_description' => $star_description,
                    ]);
                }

                return redirect()->back()->with('ratingmessage', 'Thank you for rating !!! ');
        }
    } 
}
