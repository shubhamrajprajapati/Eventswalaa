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

class UserRatingsController extends Controller
{
    public function index(){
        $user_review = Rating::where('user_id', Auth::id())->get();
        return view('users.ratings.index', compact('user_review'));
    }
   
}
