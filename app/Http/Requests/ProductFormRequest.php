<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
             'category_id' => [
                'required'
             ],
             'user_id' => [
                'nullable'
             ],
             'name' => [
                'required'
             ],
             'slug' => [
                'nullable'
            ],
             'brand' => [
                'nullable'
            ],
             'description' => [
                'nullable'
            ],
            'hotel_phone' => [
                'nullable'
            ],
            'hotel_type' => [
                'nullable'
            ],
            'all_party' => [
                'nullable'
            ],
           
             'hall_one' => [
                'nullable'
            ],
             'hall_two' => [
                'nullable'
            ],
             'hall_three' => [
                'nullable'
            ],
             'hall_four' => [
                'nullable'
            ],
             'hall_five' => [
                'nullable'
            ],
             'hall_six' => [
                'nullable'
            ],
             'hall_seven' => [
                'nullable'
            ],
     
             'mincapacity_one' => [
                'nullable'
            ],
             'mincapacity_two' => [
                'nullable'
            ],
             'mincapacity_three' => [
                'nullable'
            ],
             'mincapacity_four' => [
                'nullable'
            ],
             'mincapacity_five' => [
                'nullable'
            ],
             'mincapacity_six' => [
                'nullable'
            ],
             'mincapacity_seven' => [
                'nullable'
            ],
     
             'maxcapacity_one' => [
                'nullable'
            ],
             'maxcapacity_two' => [
                'nullable'
            ],
             'maxcapacity_three' => [
                'nullable'
            ],
             'maxcapacity_four' => [
                'nullable'
            ],
             'maxcapacity_five' => [
                'nullable'
            ],
             'maxcapacity_six' => [
                'nullable'
            ],
             'maxcapacity_seven' => [
                'nullable'
            ],
     
             'vegprice_one' => [
                'nullable'
            ],
             'vegprice_two' => [
                'nullable'
            ],
             'vegprice_three' => [
                'nullable'
            ],
             'vegprice_four' => [
                'nullable'
            ],
             'vegprice_five' => [
                'nullable'
            ],
             'vegprice_six' => [
                'nullable'
            ],
             'vegprice_seven' => [
                'nullable'
            ],
     
             'veg_sell_price_one' => [
                'nullable'
            ],
             'veg_sell_price_two' => [
                'nullable'
            ],
             'veg_sell_price_three' => [
                'nullable'
            ],
             'veg_sell_price_four' => [
                'nullable'
            ],
             'veg_sell_price_five' => [
                'nullable'
            ],
             'veg_sell_price_six' => [
                'nullable'
            ],
             'veg_sell_price_seven' => [
                'nullable'
            ],
     
             'nonprice_one' => [
                'nullable'
            ],
             'nonprice_two' => [
                'nullable'
            ],
             'nonprice_three' => [
                'nullable'
            ],
             'nonprice_four' => [
                'nullable'
            ],
             'nonprice_five' => [
                'nullable'
            ],
             'nonprice_six' => [
                'nullable'
            ],
             'nonprice_seven' => [
                'nullable'
            ],
     
             'non_sell_price_one' => [
                'nullable'
            ],
             'non_sell_price_two' => [
                'nullable'
            ],
             'non_sell_price_three' => [
                'nullable'
            ],
             'non_sell_price_four' => [
                'nullable'
            ],
             'non_sell_price_five' => [
                'nullable'
            ],
             'non_sell_price_six' => [
                'nullable'
            ],
             'non_sell_price_seven' => [
                'nullable'
            ],
            'heading_occasions' => [
                'nullable'
            ],
            
             'space_capacity' => [
                'nullable'
            ],
            
            'heading_cuisines' => [
                'nullable'
            ],
             'good_for_occasions' => [
                'nullable'
            ],
             'operating_time' => [
                'nullable'
            ],
             'cuisines_served' => [
                'nullable'
            ],
            
            'heading_facilities' => [
                'nullable'
            ],
            'facilities' => [
                'nullable'
            ],
            
             'heading_space' => [
                'nullable'
            ],
            'space_type' => [
                'nullable'
            ],
            
             'heading_parking' => [
                'nullable'
            ],
            'car_parking' => [
                'nullable'
            ],
            'heading_information' => [
                'nullable'
            ],
             'more_information' => [
                'nullable'
            ],
            
             'heading_usps' => [
                'nullable'
            ],
            'usps_power' => [
                'nullable'
            ],
            
             'heading_room' => [
                'nullable'
            ],
            'room_details' => [
                'nullable'
            ],
             'welcom_hotel' => [
                'nullable'
            ],
             'service_policy' => [
                'nullable'
            ],
            
             'heading_summary' => [
                'nullable'
            ],
            'summary_event_space' => [
                'nullable'
            ],
            
             'heading_landmark' => [
                'nullable'
            ],
            'nearest_landmark' => [
                'nullable'
            ],
             'heading_terms' => [
                'nullable'
            ],
            'policy_terms' => [
                'nullable'
            ],
             'heading_disclaimer' => [
                'nullable'
            ],
            'disclaimer' => [
                'nullable'
            ],
     
             'city' => [
                'nullable'
            ],
             'state' => [
                'nullable'
            ],
             'near_by' => [
                'nullable'
            ],
            
             'full_address' => [
                'nullable'
            ],
     
             'origial_price' => [
                'nullable'
            ],
             'selling_price' => [
                'nullable'
            ],
             'quantity' => [
                'nullable'
            ],
            'all' => [
                'nullable'
            ],
            'hotels' => [
                'nullable'
            ],
            'resorts' => [
                'nullable'
            ],
            'restaurants' => [
                'nullable'
            ],
            'bars_nightclubs' => [
                'nullable'
            ],
            'conference_centers' => [
                'nullable'
            ],
            'theaters' => [
                'nullable'
            ],
            'corporate_party' => [
                'nullable'
            ],
            'wedding_ceremony' => [
                'nullable'
            ],
            'wedding_anniversary' => [
                'nullable'
            ],
            'birthday_party' => [
                'nullable'
            ],
            'engagement_ceremony' => [
                'nullable'
            ],
            'wedding_reception' => [
                'nullable'
            ],
            'birthday_party_for_kids' => [
                'nullable'
            ],
            'corporate_training' => [
                'nullable'
            ],
             'trending' => [
                'nullable'
            ],
             'status' => [
                'nullable'
            ],
     
             'meta_title' => [
                'nullable'
            ],
             'meta_keyword' => [
                'nullable'
            ],
             'meta_description' => [
                'nullable'
            ],
            'image' => [
                'nullable'
            ],
        ];
    }
}
