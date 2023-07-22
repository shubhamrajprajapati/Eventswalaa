<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ListYourBusinessRequest;
use App\Models\Listbusiness;
use Mail;
use App\Mail\AddBusinessMailable;

class ListbusinessController extends Controller
{
     public function index(){
        return view('frontend.venue.business.index');
     }
     public function store(Request $request){

      // php artisan make:request ListYourBusinessRequest
      // $validateData = $request->validated();
      // $business = new Listbusiness();
      // $business->venue_name = $validateData['venue_name'];
      // $business->country = $validateData['country'];
      // $business->state = $validateData['state'];
      // $business->city = $validateData['city'];
      // $business->address = $validateData['address'];
      // $business->max_capacity = $validateData['max_capacity'];
      // $business->description = $validateData['description'];
      // $business->venue_url = $validateData['venue_url'];
      // $business->owner_name = $validateData['owner_name'];
      // $business->owner_phone = $validateData['owner_phone'];
      // $business->owner_email = $validateData['owner_email'];
      // $business->terms = $validateData['terms'];
      // $business->save();

      $business = new Listbusiness();
      $business->venue_name = $request->input('venue_name');
      $business->country = $request->input('country');
      $business->state = $request->input('state');
      $business->city = $request->input('city');
      $business->address = $request->input('address');
      $business->max_capacity = $request->input('max_capacity');
      $business->description = $request->input('description');
      $business->venue_url = $request->input('venue_url');
      $business->owner_name = $request->input('owner_name');
      $business->owner_phone = $request->input('owner_phone');
      $business->owner_email = $request->input('owner_email');
      $business->save();

      $business_data = [
         'venue_name' => $request->input('venue_name'),
         'country' => $request->input('country'),
         'state' => $request->input('state'),
         'city' => $request->input('city'),
         'address' => $request->input('address'),
         'max_capacity' => $request->input('max_capacity'),
         'description' => $request->input('description'),
         'venue_url' => $request->input('venue_url'),
         'owner_name' => $request->input('owner_name'),
         'owner_phone' => $request->input('owner_phone'),
         'owner_email' => $request->input('owner_email'),
     ];
     Mail::to('info.eventswalaa@gmail.com')->send(new AddBusinessMailable($business_data));

      return redirect()->back()->with('message', 'Good job!, Thank you, We will get back to you soon!, success !!!');
     }
}
