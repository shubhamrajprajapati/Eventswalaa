<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listbusiness;
use App\Models\Contact;

class BusinessController extends Controller
{
     public function index(){
        $businesslist = Listbusiness::orderBy('created_at', 'desc')->get();
        return view('admin.products.listbusiness', compact('businesslist'));
     }

     public function contact(){
      $contacts = Contact::all();
      return view('admin.products.contact', compact('contacts'));
     }
     public function delete(Request $request, $id){
         $contacts = Contact::findOrFail($id);
         $contacts->delete();
         return redirect()->back()->with('message', 'Record deleted successfully !!!');
     }
}
