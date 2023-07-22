<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Http\Requests\ProductFormRequest;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductImage;
use Illuminate\Support\Facades\File;
use App\Models\Color;
use App\Models\ProductColor;
use App\Models\Otherdetail;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::where('status','0')->where('user_id', Auth::id())->get();
        return view('thirdparty.products.index', compact('products'));
    }


}
