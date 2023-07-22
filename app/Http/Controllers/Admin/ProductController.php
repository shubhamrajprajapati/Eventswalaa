<?php

namespace App\Http\Controllers\Admin;

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

        $products = Product::where('status', '0')->get();
        $colors= Color::where('status', '0')->get();
        return view('admin.products.index', compact('products','colors'));
    }
    public function create()
    {
        $colors= Color::where('status', '0')->get();
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.products.create', compact('categories','brands','colors'));
    }

    public function store(ProductFormRequest $request)
    { 
        // php artisan make:request ProductFormRequest
        $validateData = $request->validated();
        $category = Category::findOrFail($validateData['category_id']);

        $user_id = Auth::id();
        $product = User::find($user_id);
        // $product = new post();
        $product->user_id = Auth::id();

        $product = $category->products()->create([
         // 'user_id' => $validateData['user_id'],
         'category_id' => $validateData['category_id'],
         'name' => $validateData['name'],
         'slug' => Str::slug($validateData['slug']),
         'brand' => $validateData['brand'],
         'description' => $validateData['description'],
         'hotel_phone' => $validateData['hotel_phone'],
         'hotel_type' => $validateData['hotel_type'],
             
         'all_party' => $validateData['all_party'],
         'hall_one' => $validateData['hall_one'],
         'hall_two' => $validateData['hall_two'],
         'hall_three' => $validateData['hall_three'],
         'hall_four' => $validateData['hall_four'],
         'hall_five' => $validateData['hall_five'],
         // 'hall_six' => $validateData['hall_six'],
         // 'hall_seven' => $validateData['hall_seven'],
 
         'mincapacity_one' => $validateData['mincapacity_one'],
         'mincapacity_two' => $validateData['mincapacity_two'],
         'mincapacity_three' => $validateData['mincapacity_three'],
         'mincapacity_four' => $validateData['mincapacity_four'],
         'mincapacity_five' => $validateData['mincapacity_five'],
         // 'mincapacity_six' => $validateData['mincapacity_six'],
         // 'mincapacity_seven' => $validateData['mincapacity_seven'],
 
         'maxcapacity_one' => $validateData['maxcapacity_one'],
         'maxcapacity_two' => $validateData['maxcapacity_two'],
         'maxcapacity_three' => $validateData['maxcapacity_three'],
         'maxcapacity_four' => $validateData['maxcapacity_four'],
         'maxcapacity_five' => $validateData['maxcapacity_five'],
         // 'maxcapacity_six' => $validateData['maxcapacity_six'],
         // 'maxcapacity_seven' => $validateData['maxcapacity_seven'],
 
         'vegprice_one' => $validateData['vegprice_one'],
         'vegprice_two' => $validateData['vegprice_two'],
         'vegprice_three' => $validateData['vegprice_three'],
         'vegprice_four' => $validateData['vegprice_four'],
         'vegprice_five' => $validateData['vegprice_five'],
         // 'vegprice_six' => $validateData['vegprice_six'],
         // 'vegprice_seven' => $validateData['vegprice_seven'],
 
         'veg_sell_price_one' => $validateData['veg_sell_price_one'],
         'veg_sell_price_two' => $validateData['veg_sell_price_two'],
         'veg_sell_price_three' => $validateData['veg_sell_price_three'],
         'veg_sell_price_four' => $validateData['veg_sell_price_four'],
         'veg_sell_price_five' => $validateData['veg_sell_price_five'],
         // 'veg_sell_price_six' => $validateData['veg_sell_price_six'],
         // 'veg_sell_price_seven' => $validateData['veg_sell_price_seven'],
 
         'nonprice_one' => $validateData['nonprice_one'],
         'nonprice_two' => $validateData['nonprice_two'],
         'nonprice_three' => $validateData['nonprice_three'],
         'nonprice_four' => $validateData['nonprice_four'],
         'nonprice_five' => $validateData['nonprice_five'],
         // 'nonprice_six' => $validateData['nonprice_six'],
         // 'nonprice_seven' => $validateData['nonprice_seven'],
 
         'non_sell_price_one' => $validateData['non_sell_price_one'],
         'non_sell_price_two' => $validateData['non_sell_price_two'],
         'non_sell_price_three' => $validateData['non_sell_price_three'],
         'non_sell_price_four' => $validateData['non_sell_price_four'],
         'non_sell_price_five' => $validateData['non_sell_price_five'],
         // 'non_sell_price_six' => $validateData['non_sell_price_six'],
         // 'non_sell_price_seven' => $validateData['non_sell_price_seven'],
 
         'space_capacity' => $validateData['space_capacity'],

 
         'city' => $validateData['city'],
         'state' => $validateData['state'],
         'near_by' => $validateData['near_by'],
         'full_address' => $validateData['full_address'],
 
         // 'origial_price' => $validateData['origial_price'],
         // 'selling_price' => $validateData['selling_price'],
         // 'quantity' => $validateData['quantity'],
         'all' => $request->all == true ? 'all':'0',
         'hotels' => $request->hotels == true ? 'hotels':'0',
         'resorts' => $request->resorts == true ? 'resorts':'0',
         'restaurants' => $request->restaurants == true ? 'restaurants':'0',
         'bars_nightclubs' => $request->bars_nightclubs == true ? 'bars_nightclubs':'0',
         'conference_centers' => $request->conference_centers == true ? 'conference_centers':'0',
         'theaters' => $request->theaters == true ? 'theaters':'0',
         'corporate_party' => $request->corporate_party == true ? 'corporate_party':'0',
         'wedding_ceremony' => $request->wedding_ceremony == true ? 'wedding_ceremony':'0',
         'wedding_anniversary' => $request->wedding_anniversary == true ? 'wedding_anniversary':'0',
         'birthday_party' => $request->birthday_party == true ? 'birthday_party':'0',
         'engagement_ceremony' => $request->engagement_ceremony == true ? 'engagement_ceremony':'0',
         'wedding_reception' => $request->wedding_reception == true ? 'wedding_reception':'0',
         'birthday_party_for_kids' => $request->birthday_party_for_kids == true ? 'birthday_party_for_kids':'0',
         'corporate_training' => $request->corporate_training == true ? 'corporate_training':'0',
        // 'trending' => $request->trending == true ? '1':'0',
         'status' => $request->status == true ? '1':'0',
 
         'meta_title' => $validateData['meta_title'],
         'meta_keyword' => $validateData['meta_keyword'],
         'meta_description' => $validateData['meta_description'],

            
        ]);

        // return $product->id;

        if($request->hasFile('image')) {
            $uploadPath = 'uploads/products/';

            $i  = 1;

            foreach ($request->file('image') as $imageFile) {
                $extention = $imageFile->getClientOriginalExtension();
                $filename = time().$i++.'.'.$extention;
                $imageFile->move($uploadPath,$filename);
                $finalImagePathName = $uploadPath.$filename;

                $product->productImages()->create([
                    'product_id' => $product->id,   
                    'image' => $finalImagePathName,   
                ]);

            }
        }

        if ($request->colors) {
            foreach ($request->colors as $key => $color) {
                $product->productColors()->create([
                    'product_id' => $product->id,
                    'color_id' =>$color,
                    'quantity' => $request->colorquantity[$key] ?? 0
                ]);
            }
        }

                // $product = Otherdetail::create($request->all());

                $product->productOtherDetails()->create([
                    'category_id' => $validateData['category_id'],
                    'product_id' => $product->id,
                    'heading_occasions' => $validateData['heading_occasions'],
                    'good_for_occasions' => $validateData['good_for_occasions'],
                    'operating_time' => $validateData['operating_time'],
                    'heading_cuisines' => $validateData['heading_cuisines'],
                    'cuisines_served' => $validateData['cuisines_served'],
                    'heading_facilities' => $validateData['heading_facilities'],
                    'facilities' => $validateData['facilities'],
                    'heading_space' => $validateData['heading_space'],
                    'space_type' => $validateData['space_type'],
                    'heading_parking' => $validateData['heading_parking'],
                    'car_parking' => $validateData['car_parking'],
                    'heading_information' => $validateData['heading_information'],
                    'more_information' => $validateData['more_information'],
                    'heading_usps' => $validateData['heading_usps'],
                    'usps_power' => $validateData['usps_power'],
                    'heading_room' => $validateData['heading_room'],
                    'room_details' => $validateData['room_details'],
                    // 'heading_policy' => $validateData['heading_policy'],
                    // 'service_policy' => $validateData['service_policy'],
                    'heading_summary' => $validateData['heading_summary'],
                    'summary_event_space' => $validateData['summary_event_space'],
                    'heading_landmark' => $validateData['heading_landmark'],
                    'nearest_landmark' => $validateData['nearest_landmark'],
                    'heading_terms' => $validateData['heading_terms'],
                    'policy_terms' => $validateData['policy_terms'],
                    'heading_disclaimer' => $validateData['heading_disclaimer'],
                    'disclaimer' => $validateData['disclaimer'],
                ]);

            

        return redirect()->back()->with('message', 'Data added successfully !!');
        
    }

    public function edit( int $product_id ){ 
        $product = Product::findOrFail($product_id);
        $brands = Brand::all();
        $categories = Category::all();
        $product_color = $product->productColors->pluck('color_id')->toArray();
        $colors = Color::whereNotIn('id', $product_color)->get();
          //$others_details = $product->productOtherDetails->pluck('product_id')->toArray();
          // return $othersDetails = Otherdetail::whereNotIn('id', $others_details)->first();
        $others_details = $product->productOtherDetails()->first();
 
        // print_r($colors);
        return view('admin.products.edit', compact('categories','others_details','brands','product','colors'));
    }

    public function update(ProductFormRequest $request, int $product_id )
    {
        $validateData = $request->validated();
        $product = Category::findOrFail($validateData['category_id'])
        ->products()->where('id', $product_id)->first();

        if ($product) 
        { 
            
            $product->update([
                // 'user_id' => $validateData['user_id'],
                'category_id' => $validateData['category_id'],
                'name' => $validateData['name'],
                'slug' => Str::slug($validateData['slug']),
                'brand' => $validateData['brand'],
                'description' => $validateData['description'],
                'hotel_phone' => $validateData['hotel_phone'],
                'hotel_type' => $validateData['hotel_type'],
                
                'all_party' => $validateData['all_party'],
                'hall_one' => $validateData['hall_one'],
                'hall_two' => $validateData['hall_two'],
                'hall_three' => $validateData['hall_three'],
                'hall_four' => $validateData['hall_four'],
                'hall_five' => $validateData['hall_five'],
                // 'hall_six' => $validateData['hall_six'],
                // 'hall_seven' => $validateData['hall_seven'],
        
                'mincapacity_one' => $validateData['mincapacity_one'],
                'mincapacity_two' => $validateData['mincapacity_two'],
                'mincapacity_three' => $validateData['mincapacity_three'],
                'mincapacity_four' => $validateData['mincapacity_four'],
                'mincapacity_five' => $validateData['mincapacity_five'],
                // 'mincapacity_six' => $validateData['mincapacity_six'],
                // 'mincapacity_seven' => $validateData['mincapacity_seven'],
        
                'maxcapacity_one' => $validateData['maxcapacity_one'],
                'maxcapacity_two' => $validateData['maxcapacity_two'],
                'maxcapacity_three' => $validateData['maxcapacity_three'],
                'maxcapacity_four' => $validateData['maxcapacity_four'],
                'maxcapacity_five' => $validateData['maxcapacity_five'],
                // 'maxcapacity_six' => $validateData['maxcapacity_six'],
                // 'maxcapacity_seven' => $validateData['maxcapacity_seven'],
        
                'vegprice_one' => $validateData['vegprice_one'],
                'vegprice_two' => $validateData['vegprice_two'],
                'vegprice_three' => $validateData['vegprice_three'],
                'vegprice_four' => $validateData['vegprice_four'],
                'vegprice_five' => $validateData['vegprice_five'],
                // 'vegprice_six' => $validateData['vegprice_six'],
                // 'vegprice_seven' => $validateData['vegprice_seven'],
        
                'veg_sell_price_one' => $validateData['veg_sell_price_one'],
                'veg_sell_price_two' => $validateData['veg_sell_price_two'],
                'veg_sell_price_three' => $validateData['veg_sell_price_three'],
                'veg_sell_price_four' => $validateData['veg_sell_price_four'],
                'veg_sell_price_five' => $validateData['veg_sell_price_five'],
                // 'veg_sell_price_six' => $validateData['veg_sell_price_six'],
                // 'veg_sell_price_seven' => $validateData['veg_sell_price_seven'],
        
                'nonprice_one' => $validateData['nonprice_one'],
                'nonprice_two' => $validateData['nonprice_two'],
                'nonprice_three' => $validateData['nonprice_three'],
                'nonprice_four' => $validateData['nonprice_four'],
                'nonprice_five' => $validateData['nonprice_five'],
                // 'nonprice_six' => $validateData['nonprice_six'],
                // 'nonprice_seven' => $validateData['nonprice_seven'],
        
                'non_sell_price_one' => $validateData['non_sell_price_one'],
                'non_sell_price_two' => $validateData['non_sell_price_two'],
                'non_sell_price_three' => $validateData['non_sell_price_three'],
                'non_sell_price_four' => $validateData['non_sell_price_four'],
                'non_sell_price_five' => $validateData['non_sell_price_five'],
                // 'non_sell_price_six' => $validateData['non_sell_price_six'],
                // 'non_sell_price_seven' => $validateData['non_sell_price_seven'],
        
                'space_capacity' => $validateData['space_capacity'],
        
        
                'city' => $validateData['city'],
                'state' => $validateData['state'],
                'near_by' => $validateData['near_by'],
                'full_address' => $validateData['full_address'],
                
                // 'origial_price' => $validateData['origial_price'],
                // 'selling_price' => $validateData['selling_price'],
                // 'quantity' => $validateData['quantity'],
                'all' => $request->all == true ? 'all':'0',
                'hotels' => $request->hotels == true ? 'hotels':'0',
                'resorts' => $request->resorts == true ? 'resorts':'0',
                'restaurants' => $request->restaurants == true ? 'restaurants':'0',
                'bars_nightclubs' => $request->bars_nightclubs == true ? 'bars_nightclubs':'0',
                'conference_centers' => $request->conference_centers == true ? 'conference_centers':'0',
                'theaters' => $request->theaters == true ? 'theaters':'0',
                'corporate_party' => $request->corporate_party == true ? 'corporate_party':'0',
                'wedding_ceremony' => $request->wedding_ceremony == true ? 'wedding_ceremony':'0',
                'wedding_anniversary' => $request->wedding_anniversary == true ? 'wedding_anniversary':'0',
                'birthday_party' => $request->birthday_party == true ? 'birthday_party':'0',
                'engagement_ceremony' => $request->engagement_ceremony == true ? 'engagement_ceremony':'0',
                'wedding_reception' => $request->wedding_reception == true ? 'wedding_reception':'0',
                'birthday_party_for_kids' => $request->birthday_party_for_kids == true ? 'birthday_party_for_kids':'0',
                'corporate_training' => $request->corporate_training == true ? 'corporate_training':'0',
                // 'trending' => $request->trending == true ? '1':'0',
                'status' => $request->status == true ? '1':'0',
        
                'meta_title' => $validateData['meta_title'],
                'meta_keyword' => $validateData['meta_keyword'],
                'meta_description' => $validateData['meta_description'],
        
            ]);
            // return $product->id;

        if($request->hasFile('image')) 
        {
            $uploadPath = 'uploads/products/';

            $i  = 1;

            foreach ($request->file('image') as $imageFile) {
                $extention = $imageFile->getClientOriginalExtension();
                $filename = time().$i++.'.'.$extention;
                $imageFile->move($uploadPath,$filename);
                $finalImagePathName = $uploadPath.$filename;

                $product->productImages()->create([
                    'product_id' => $product->id,   
                    'image' => $finalImagePathName,   
                ]);

            }
        }

        if ($request->colors) 
        {
            foreach ($request->colors as $key => $color) {
                $product->productColors()->create([
                    'product_id' => $product->id,
                    'color_id' =>$color,
                    'quantity' => $request->colorquantity[$key] ?? 0
                ]);
            }
        }

        $product->productOtherDetails()->update([
            'category_id' => $validateData['category_id'],
            'product_id' => $product->id,
            'heading_occasions' => $validateData['heading_occasions'],
            'good_for_occasions' => $validateData['good_for_occasions'],
            'operating_time' => $validateData['operating_time'],
            'heading_cuisines' => $validateData['heading_cuisines'],
            'cuisines_served' => $validateData['cuisines_served'],
            'heading_facilities' => $validateData['heading_facilities'],
            'facilities' => $validateData['facilities'],
            'heading_space' => $validateData['heading_space'],
            'space_type' => $validateData['space_type'],
            'heading_parking' => $validateData['heading_parking'],
            'car_parking' => $validateData['car_parking'],
            'heading_information' => $validateData['heading_information'],
            'more_information' => $validateData['more_information'],
            'heading_usps' => $validateData['heading_usps'],
            'usps_power' => $validateData['usps_power'],
            'heading_room' => $validateData['heading_room'],
            'room_details' => $validateData['room_details'],
            // 'heading_policy' => $validateData['heading_policy'],
            // 'service_policy' => $validateData['service_policy'],
            'heading_summary' => $validateData['heading_summary'],
            'summary_event_space' => $validateData['summary_event_space'],
            'heading_landmark' => $validateData['heading_landmark'],
            'nearest_landmark' => $validateData['nearest_landmark'],
            'heading_terms' => $validateData['heading_terms'],
            'policy_terms' => $validateData['policy_terms'],
            'heading_disclaimer' => $validateData['heading_disclaimer'],
            'disclaimer' => $validateData['disclaimer'],
        ]);

        return redirect()->back()->with('message', 'Data updated successfully !!');
        }
        else{
            return redirect('admin/products')->with('message', 'No such product id found !!!');
        }

    }

    public function destroyImage(int $product_image_id){
        $productImage = ProductImage::findOrFail($product_image_id);

        if (File::exists($productImage->image)) {
            File::delete($productImage->image);
        }
        $productImage->delete();
        // return redirect('admin/products')->with('message','Image Deleted');
        return redirect()->back()->with('message','Image Deleted');
    }

    public function delete($id){
        $products = Product::findOrFail($id);
        $products->status = '1';
        $products->update();
        return redirect()->back()->with('message', 'Record deleted successfully !!!');
    }

    public function deletedrecords(){
        $products = Product::where('status', '1')->get();
        return view('admin.products.delete', compact('products'));
    }

    public function deletedrestore($id){
        $products = Product::findOrFail($id);
        $products->status = '0';
        $products->update();
        return redirect()->back()->with('message', 'Record re-store ');
    }

    public function updateProdColorQty(Request $request, $prod_color_id){
        $productColorData = Product::findOrFail($request->product_id)
            ->productColors()->where('id', $prod_color_id)->first();
            $productColorData->update([
                'quantity' => $request->qty
            ]);
            return response()->json(['message' => 'Color quantity updated']);
    }   

    public function deleteProdColor($prod_color_id){
        $prodColor = ProductColor::findOrFail($prod_color_id);
        $prodColor->delete();
        return response()->json(['message' => 'Color deleted']);

    }
}
