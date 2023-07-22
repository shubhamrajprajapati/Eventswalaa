<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImage;
use App\Models\ProductColor;
use App\Models\Otherdetail;
use App\Models\Order;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'user_id',
        'name',
        'slug',
        'brand',
        'description',
        'hotel_phone',
        'hotel_type',
        'all_party',
        'hall_one',
        'hall_two',
        'hall_three',
        'hall_four',
        'hall_five',
        'hall_six',
        'hall_seven',

        'mincapacity_one',
        'mincapacity_two',
        'mincapacity_three',
        'mincapacity_four',
        'mincapacity_five',
        'mincapacity_six',
        'mincapacity_seven',

        'maxcapacity_one',
        'maxcapacity_two',
        'maxcapacity_three',
        'maxcapacity_four',
        'maxcapacity_five',
        'maxcapacity_six',
        'maxcapacity_seven',

        'vegprice_one',
        'vegprice_two',
        'vegprice_three',
        'vegprice_four',
        'vegprice_five',
        'vegprice_six',
        'vegprice_seven',
        
        'veg_sell_price_one',
        'veg_sell_price_two',
        'veg_sell_price_three',
        'veg_sell_price_four',
        'veg_sell_price_five',
        'veg_sell_price_six',
        'veg_sell_price_seven',

        'nonprice_one',
        'nonprice_two',
        'nonprice_three',
        'nonprice_four',
        'nonprice_five',
        'nonprice_six',
        'nonprice_seven',

        'non_sell_price_one',
        'non_sell_price_two',
        'non_sell_price_three',
        'non_sell_price_four',
        'non_sell_price_five',
        'non_sell_price_six',
        'non_sell_price_seven',


        'space_capacity',
 
        
        'city',
        'state',
        'near_by',
        'full_address',

        'origial_price',
        'selling_price',
        'quantity',
        'trending',
        'all',
        'hotels',
        'resorts',
        'restaurants',
        'bars_nightclubs',
        'conference_centers',
        'theaters',
        'corporate_party',
        'wedding_ceremony',
        'wedding_anniversary',
        'birthday_party',
        'engagement_ceremony',
        'wedding_reception',
        'birthday_party_for_kids',
        'corporate_training',
        'status',

        'meta_title',
        'meta_keyword',
        'meta_description',


    ];


    public function productImages()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
  
    public function productColors(){
        return $this->hasMany(ProductColor::class, 'product_id', 'id');
    }

   public function productOtherDetails()
    {
        return $this->hasMany(Otherdetail::class, 'product_id', 'id');
    } 

    public function productOtherDetailView() 
    {
        return $this->belongsTo(Otherdetail::class, 'product_id', 'id');
    }

    public function productOthers(){
        return $this->belongsToMany('App\Models\Otherdetail','products_id', 'id');
    }

    public function productsPhone()
    {
        return $this->hasMany(Order::class,  'id', 'product_id');
    }
}
