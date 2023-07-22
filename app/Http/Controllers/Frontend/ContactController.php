<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Contact;

class ContactController extends Controller
{
     public function index(){
        return view('frontend.contact-us');
     }
     public function storeContactForm(Request $request)
     {

      $contact = new Contact();
      
      $contact->product_id = $request->input('product_id');
      $contact->occasion_type = $request->input('occasion_type');
      $contact->date = $request->input('date');
      $contact->venue_address = $request->input('venue_address');
      $contact->no_guests = $request->input('no_guests');
      $contact->budget_range = $request->input('budget_range');
      $contact->req_meal = $request->input('req_meal');
      $contact->req_drinks = $request->input('req_drinks');
      $contact->name = $request->input('name');
      $contact->mobile = $request->input('mobile');
      $contact->email = $request->input('email');
      $contact->notes = $request->input('notes');
      $contact->save();

         $request->validate([
            'occasion_type' => 'required',
            'date' => 'required',
            'venue_address' => 'required',
            'no_guests' => 'required',
            'budget_range' => 'required',
            'req_meal' => 'required',
            'req_drinks' => 'required',
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'notes' => 'nullable',
             
         ]);
 
         $input = $request->all();
 
         Contact::create($input);
 
         //  Send mail to admin
         \Mail::send('emails.contactMail', array(
            'occasion_type' => $input['occasion_type'],
            'date' => $input['date'],
            'venue_address' => $input['venue_address'],
            'no_guests' => $input['no_guests'],
            'budget_range' => $input['budget_range'],
            'req_meal' => $input['req_meal'],
            'req_drinks' => $input['req_drinks'],
            'name' => $input['name'],
            'mobile' => $input['mobile'],
            'email' => $input['email'],
            'notes' => $input['notes'],

         ), function($message) use ($request){
             $message->from($request->email);
             $message->to('info.eventswalaa@gmail.com', 'Admin')->subject($request->get('name'));
         });
 
         return redirect()->back()->with('message', 'Thank You ! for reaching out to us, We would contact you very soon.');
     }
     public function faq(){
        return view('frontend.faq');
     }
}
