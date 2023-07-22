<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'product_id',
        'occasion_type',
        'date',
        'venue_address',
        'no_guests',
        'budget_range',
        'req_meal',
        'req_drinks',
        'name',
        'mobile',
        'email',
        'notes',
        'tracking_msg', 
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function productsPhone(){
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function productOtherDetails()
    {
        return $this->hasMany(Product::class, 'product_id', 'id');
    } 

    // public function sites(){
    //     return $this->hasMany('App\Models\Product');
    //  }
    //  public function category()
    //  {
    //     return $this->hasMany(Product::class)->withDefault();
    //  }
    public function blogcategory()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
