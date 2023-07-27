<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\Contact;

class ContactController extends Controller
{
   public function index()
   {
      return view('frontend.contact-us');
   }
   public function storeContactForm(Request $request)
   {

      $contact = new Contact();

      $contact->product_id = $request->input('product_id');
      $contact->occasion_type = $request->input('occasion_type');
      $contact->date = $request->input('occasion_date');
      $contact->venue_address = $request->input('client_given_address');
      $contact->no_guests = $request->input('no_guests');
      $contact->budget_range = $request->input('client_budget_range');
      $contact->req_meal = $request->input('client_req_meal');
      $contact->req_drinks = $request->input('client_req_drinks');
      $contact->name = $request->input('client_name');
      $contact->mobile = $request->input('client_mobile_number');
      $contact->email = $request->input('client_email_address');
      $contact->notes = $request->input('client_notes');
      $contact->save();

      // $request->validate([
      //    'product_name' => 'required',
      //    'product_address' => 'required',
      //    'occasion_type' => 'required',
      //    'occasion_date' => 'required',
      //    'client_given_address' => 'required',
      //    'no_guests' => 'required',
      //    'client_budget_range' => 'required',
      //    'client_req_meal' => 'required',
      //    'client_req_drinks' => 'required',
      //    'client_name' => 'required',
      //    'client_mobile_number' => 'required',
      //    'client_email_address' => 'required',
      //    'client_notes' => 'nullable',

      // ]);

      $input = $request->all();

      // Contact::create($input);

      //  Send mail to admin
      Mail::send('emails.contactMail', array(
         'product_id' => $input['product_id'],
         'product_url' => $input['product_url'],
         'product_name' => $input['product_name'],
         'product_address' => $input['product_address'],
         'occasion_type' => $input['occasion_type'],
         'occasion_date' => date('d M, Y', strtotime($input['occasion_date'])),
         'client_given_address' => $input['client_given_address'],
         'no_guests' => $input['no_guests'],
         'client_budget_range' => $input['client_budget_range'],
         'client_req_meal' => $input['client_req_meal'],
         'client_req_drinks' => $input['client_req_drinks'],
         'client_name' => $input['client_name'],
         'client_mobile_number' => $input['client_mobile_number'],
         'client_email_address' => $input['client_email_address'],
         'client_notes' => $input['client_notes'],

      ), function ($message) use ($request) {
         $message->from($request->client_email_address)
            ->replyTo($request->get('client_email_address'), $request->get('client_name'))
            ->to('info.eventswalaa@gmail.com', 'Admin')->subject("Eventswalla: New Inquiry from " . $request->get('client_name') . " for " . $request->product_name);
      });

      return redirect()->back()->with('message', 'Thank You! for reaching out to us. We would contact you very soon.');
   }
   public function faq()
   {
      return view('frontend.faq');
   }
}
