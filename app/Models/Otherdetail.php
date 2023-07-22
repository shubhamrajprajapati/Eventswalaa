<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Otherdetail;

class Otherdetail extends Model
{
    use HasFactory;
    protected $table = 'otherdetails';

    protected $fillable = [ 
        'product_id',
        'category_id',
        'heading_occasions',
        'good_for_occasions',
        'operating_time',
        'heading_cuisines',
        'cuisines_served',
        'heading_facilities',
        'facilities',
        'heading_space',
        'space_type',
        'heading_parking',
        'car_parking',
        'heading_information',
        'more_information',
        'heading_usps',
        'usps_power',
        'heading_room',
        'room_details',
        'heading_policy',
        'service_policy',
        'heading_summary',
        'summary_event_space',
        'heading_landmark',
        'nearest_landmark',
        'heading_terms',
        'policy_terms',
        'heading_disclaimer',
        'disclaimer',

    ];

    public function productOtherDetails()
    {
        return $this->hasMany(Otherdetail::class, 'product_id', 'id');
    } 
    // public function productOtherDetail() 
    // {
    //    return $this->belongsTo(Otherdetail::class, 'product_id', 'id');
    // } 
    
    //    public function productOtherDetails()
    //    {
    //        return $this->belongsTo(Otherdetail::class, 'product_id', 'id');
    //    } 
    
}
