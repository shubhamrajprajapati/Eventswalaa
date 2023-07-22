<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductImage;
use Illuminate\Support\Facades\File;
use App\Models\Rating;

class UserController extends Controller
{
    public function index(User $user){
        return view('users.my-profile', compact('user'));
    }
    public function profile(Request $request){
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);
        $user->name = $request->input('name');
        $user->lname = $request->input('lname');
        $user->address1 = $request->input('address1');
        $user->address2 = $request->input('address2');
        $user->city = $request->input('city');
        $user->state = $request->input('state');
        $user->pincode = $request->input('pincode');
        $user->phone = $request->input('phone');
        $user->alternet_phone = $request->input('alternet_phone');

        //    File Upload
        if($request->hasfile('image'))
        {
            $destination = 'uploads/profile/'.$user->image;

            if (File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/profile/', $filename);
            $user->image = $filename;
        }
        $user->save();
        return redirect()->back()->with('message', 'Profile updated successfully !!!');

    }
}
