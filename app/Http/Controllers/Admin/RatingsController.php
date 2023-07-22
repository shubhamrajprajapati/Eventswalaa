<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rating;
class RatingsController extends Controller
{
     public function index(){
        $ratings = Rating::all();
        return view('admin.ratings.index', compact('ratings'));
     }
     public function edit(Rating $ratings){
        return view('admin.ratings.edit', compact('ratings'));
     }
     public function update(Request $request, $id){
        $ratings = Rating::findOrFail($id);
        $ratings->stars_rated = $request->input('stars_rated');
        $ratings->star_heading = $request->input('star_heading');
        $ratings->star_description = $request->input('star_description');
        $ratings->update();
        return redirect()->back()->with('message', 'Rating updated successfully !!!');
     }
     public function delete(Request $request, $id){
        $ratings = Rating::findOrFail($id);
        $ratings->delete();

        return redirect()->back()->with('message', 'Rating Deleted !!!');
     }
}
