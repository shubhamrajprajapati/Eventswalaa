<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
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
   
}
