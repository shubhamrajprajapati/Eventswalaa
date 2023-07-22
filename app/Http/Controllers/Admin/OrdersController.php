<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
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
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
     public function index(){
        $orders = Contact::where('status', '0')->get();
            // return $usersDetails = DB::table('products')
            // ->join('orders', 'products.id', '=', 'orders.product_id')// joining the orders table , where user_id and contact_user_id are same
            // ->select('products.*', 'orders.hotel_phone')
            // ->get();

            //  return $products = Contact::where('product_id', 'id')->get();
        return view('admin.order.index', compact('orders'));
     }
     public function create(){
        $users = User::all();
        return view('admin.order.create', compact('users'));

     }
     public function store(Request $request)
     {
        $leads = new Contact();
        $leads->user_id = $request->input('user_id');
        $leads->occasion_type = $request->input('occasion_type');
        $leads->date = $request->input('date');
        $leads->venue_address = $request->input('venue_address');
        $leads->no_guests = $request->input('no_guests');
        $leads->budget_range = $request->input('budget_range');
        $leads->req_meal = $request->input('req_meal');
        $leads->req_drinks = $request->input('req_drinks');
        $leads->name = $request->input('name');
        $leads->mobile = $request->input('mobile');
        $leads->email = $request->input('email');
        $leads->notes = $request->input('notes');
        $leads->tracking_msg = $request->input('tracking_msg');
        $leads->status = $request->status == true ? '1':'0';
        $leads->save();
        return redirect()->back()->with('message', 'Lead added successfully !!!');
     }
     public function edit(Contact $contact){
        $users = User::all();
        return view('admin.order.edit', compact('contact', 'users'));
     }
     public function update(Request $request, $contact_id)
     {
         $leads = Contact::findOrFail($contact_id);
         $leads->user_id = $request->input('user_id');
         $leads->occasion_type = $request->input('occasion_type');
         $leads->date = $request->input('date');
         $leads->venue_address = $request->input('venue_address');
         $leads->no_guests = $request->input('no_guests');
         $leads->budget_range = $request->input('budget_range');
         $leads->req_meal = $request->input('req_meal');
         $leads->req_drinks = $request->input('req_drinks');
         $leads->name = $request->input('name');
         $leads->mobile = $request->input('mobile');
         $leads->email = $request->input('email');
         $leads->notes = $request->input('notes');
         $leads->tracking_msg = $request->input('tracking_msg');
         $leads->status = $request->status == true ? '1':'0';
         $leads->update();
         return redirect()->back()->with('message', 'Lead updated successfully !!!');
     }
}
