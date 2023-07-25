<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductImage;
use Illuminate\Support\Facades\File;
use App\Models\Color;
use App\Models\ProductColor;
use App\Models\Rating;
use App\Models\Otherdetail;

class FrontendController extends Controller
{
     public function index()
     {
          $categories = Category::where('status', '0')->get();
          $weddingCeremonyHome = Product::where('wedding_ceremony', 'wedding_ceremony')->get();
          $birthdayPartyHome = Product::where('birthday_party', 'birthday_party')->get();
          return view('frontend.index', compact('categories', 'weddingCeremonyHome', 'birthdayPartyHome'));
     }
     public function categories()
     {
          $categories = Category::where('status', '0')->get();
          return view('frontend.venue.category.index', compact('categories'));
     }

     public function products($category_slug)
     {
          $category = Category::where('slug', $category_slug)->first();
          $searchcategories = Category::where('status', '0')->get();
          if ($category) {
               //    $products = $category->products()->get();
               return view('frontend.venue.products.index', compact('category', 'searchcategories'));
          } else {
               return redirect()->back();
          }
     }

     public function productsView(string $category_slug, string $product_slug)
     {
          $category = Category::where('slug', $category_slug)->first();

          if ($category) {

               $product = $category->products()->where('slug', $product_slug)->where('status', '0')->first();
               $product_other_details = $product->productOtherDetails()->first();

               if ($product) {
                    $ratings = Rating::where('prod_id', $product->id)->get();
                    $ratings_show = Rating::where('prod_id', $product->id)->get();
                    $rating_sum = Rating::where('prod_id', $product->id)->sum('stars_rated');
                    $user_rating = Rating::where('prod_id', $product->id)->where('user_id', Auth::id())->first();

                    if ($ratings->count() > 0) {
                         $rating_value = $rating_sum / $ratings->count();
                    } else {
                         $rating_value = 0;
                    }
                    return view(
                         'frontend.venue.products.view',
                         compact('product', 'product_other_details', 'category', 'ratings', 'rating_value', 'ratings_show', 'user_rating')
                    );
               } else {
                    return redirect()->back();
               }
          } else {
               return redirect()->back();
          }
     }


     public function aboutUs()
     {
          return view('frontend.about-us');
     }

     public function privacyPolicy()
     {
          return view('frontend.privacy-policy');
     }

     public function termsConditions()
     {
          return view('frontend.terms-and-conditions');
     }



     public function searchProducts(Request $request)
     {
          $event = str_replace(" ", "_", strtolower($request->event ?? "")); // for searching event if one hotel host more than one event
          $city = $request->city ?? "";
          $near_by = $request->near_by ?? "";
          $hotel = $request->hotel ?? "";

          // Price filter
          $price = $request->price ?? "";

          // Event Type Checkbox
          $hotels = $request->hotels ?? "";
          $resorts = $request->resorts ?? "";
          $restaurants = $request->restaurants ?? "";
          $bars_nightclubs = $request->bars_nightclubs ?? "";
          $conference_centers = $request->conference_centers ?? "";
          $theaters = $request->theaters ?? "";

          $query = Product::query()->where('status', '0');

          if ($event != "") {
               $query->where($event, $event);
          }

          if ($city != "") {
               $query->where('city', 'LIKE', '%' . $request->city . '%');
               $query->where('state', 'LIKE', '%' . $request->city . '%');
          }

          if ($near_by != "") {
               $query->where('near_by', 'LIKE', '%' . $request->near_by . '%');
               $query->orWhere('full_address', 'LIKE', '%' . $request->near_by . '%');
          }

          if ($hotel != "") {
               $query->where('name', 'LIKE', '%' . $request->hotel . '%');
          }

          if ($price != "") {
               if ($price == 'low-to-high') {
                    $query->orderBy('veg_sell_price_one', 'asc');
                    $query->orderBy('non_sell_price_one', 'asc');
               } elseif ($price == 'high-to-low') {
                    $query->orderBy('veg_sell_price_one', 'desc');
                    $query->orderBy('non_sell_price_one', 'desc');
               }
          }

          // Event type category

          if ($hotels != "") {
               $query->where($hotels, $hotels);
          }

          if ($resorts != "") {
               $query->where($resorts, $resorts);
          }

          if ($restaurants != "") {
               $query->where($restaurants, $restaurants);
          }

          if ($bars_nightclubs != "") {
               $query->where($bars_nightclubs, $bars_nightclubs);
          }

          if ($conference_centers != "") {
               $query->where($conference_centers, $conference_centers);
          }

          if ($theaters != "") {
               $query->where($theaters, $theaters);
          }

          $searchProducts = $query->latest()->paginate(50);
          $totalResults = $query->count();

          $categories = Category::where('status', '0')->get();

          return view('frontend.venue.products.search', compact('searchProducts', 'categories', 'totalResults'));
     }

     public function filterAll()
     {
          $category = Category::all();
          $allFilter = Product::where('all', 'all')
               ->latest()->paginate(50);
          return view('frontend.pages.all', compact('allFilter', 'category'));
     }
     public function filterHotels()
     {
          $category = Category::all();
          $allFilter = Product::where('hotels', 'hotels')
               ->latest()->paginate(50);
          return view('frontend.pages.hotels', compact('allFilter', 'category'));
     }
     public function filterResorts()
     {
          $category = Category::all();
          $allFilter = Product::where('resorts', 'resorts')
               ->latest()->paginate(50);
          return view('frontend.pages.resorts', compact('allFilter', 'category'));
     }
     public function filterRestaurants()
     {
          $category = Category::all();
          $allFilter = Product::where('restaurants', 'restaurants')
               ->latest()->paginate(50);
          return view('frontend.pages.restaurants', compact('allFilter', 'category'));
     }
     public function filterBarsNightclubs()
     {
          $category = Category::all();
          $allFilter = Product::where('bars_nightclubs', 'bars_nightclubs')
               ->latest()->paginate(50);
          return view('frontend.pages.bars-nightclubs', compact('allFilter', 'category'));
     }
     public function filterConferenceCenters()
     {
          $category = Category::all();
          $allFilter = Product::where('conference_centers', 'conference_centers')
               ->latest()->paginate(50);
          return view('frontend.pages.conference-centers', compact('allFilter', 'category'));
     }
     public function filterTheaters()
     {
          $category = Category::all();
          $allFilter = Product::where('theaters', 'theaters')
               ->latest()->paginate(50);
          return view('frontend.pages.theaters', compact('allFilter', 'category'));
     }
     public function filterCorporateParty()
     {
          $category = Category::all();
          $allFilter = Product::where('corporate_party', 'corporate_party')
               ->latest()->paginate(50);
          return view('frontend.pages.corporate-party', compact('allFilter', 'category'));
     }
     public function filterWeddingCeremony()
     {
          $category = Category::all();
          $allData = Product::where('wedding_ceremony', 'wedding_ceremony')
               //    ->latest()->paginate(50);
               ->get();
          return view('frontend.pages.wedding-ceremony', compact('allData', 'category'));
     }
     public function filterWeddingAnniversary()
     {
          $category = Category::all();
          $allFilter = Product::where('wedding_anniversary', 'wedding_anniversary')
               ->latest()->paginate(50);
          return view('frontend.pages.wedding-anniversary', compact('allFilter', 'category'));
     }
     public function filterbirthdayParty()
     {
          $category = Category::all();
          $allFilter = Product::where('birthday_party', 'birthday_party')
               ->latest()->paginate(50);
          return view('frontend.pages.birthday-party', compact('allFilter', 'category'));
     }
     public function filterEngagementCeremony()
     {
          $category = Category::all();
          $allFilter = Product::where('engagement_ceremony', 'engagement_ceremony')
               ->latest()->paginate(50);
          return view('frontend.pages.engagement-ceremony', compact('allFilter', 'category'));
     }
     public function filterWeddingReception(Request $request)
     {

          $category = Category::all();
          $allFilter = Product::orderBy('veg_sell_price_one', 'desc')->where('wedding_reception', 'wedding_reception')
               ->latest()->paginate(50);
          if ($request->sort_by == 'veg_sell_price_one') {
               $allFilter = Product::orderBy('veg_sell_price_one', 'asc')->where('wedding_reception', 'wedding_reception')
                    ->latest()->paginate(50);
          }
          if ($request->sort_by == 'veg_sell_price_one') {
               $allFilter = Product::orderBy('veg_sell_price_one', 'desc')->where('wedding_reception', 'wedding_reception')
                    ->latest()->paginate(50);
          }
          return view('frontend.pages.wedding-reception', compact('allFilter', 'category'))->render();

          //    return view('search', compact('prop','allCategory','cities','req'));


          // $query = Product::where('wedding_reception', 'wedding_reception')
          // ->latest()->paginate(50);
          // if($request->keyword){
          //      $query = $query->where('name','like','%'.$keyword.'%');
          // }
          // if($request->min_price && $request->max_price){
          //      $query = $query->where('veg_sell_price_one','>=',$request->min_price);
          //      $query = $query->where('veg_sell_price_one','<=',$request->max_price);
          // }
          // $allFilter = $query->where('wedding_reception', 'wedding_reception')->latest()->paginate(50);
          // return view('frontend.pages.wedding-reception', compact('allFilter','category'));

          //    $category = Category::all();
          //    $allFilter = Product::where('wedding_reception', 'wedding_reception')
          //    ->latest()->paginate(50);
          //    return view('frontend.pages.wedding-reception', compact('allFilter','category'));


     }
     public function filterBirthdayPartyKids()
     {
          $category = Category::all();
          $allFilter = Product::where('birthday_party_for_kids', 'birthday_party_for_kids')
               ->latest()->paginate(50);
          return view('frontend.pages.birthday-party-for-kids', compact('allFilter', 'category'));
     }
     public function filterCorporateTraining()
     {
          $category = Category::all();
          $allFilter = Product::where('corporate_training', 'corporate_training')
               ->latest()->paginate(50);
          return view('frontend.pages.corporate-training', compact('allFilter', 'category'));
     }
}
