<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ColorFormRequest;
use App\Models\Color;

class ColorController extends Controller
{
     public function index(){
        $colors = Color::where('status', '0')->get();
        return view('admin.colors.index', compact('colors'));
     }
     public function create(){
        return view('admin.colors.create');
     }
     public function store(ColorFormRequest $request){
        // php artisan make:request ColorFormRequest
        $validatedData =  $request->validated();
         $validatedData['status'] = $request->status == true ? '1':'0';
        Color::create($validatedData);

        return redirect()->back()->with('message', 'Data Added Successfully !!!');
     }
     public function edit(Color $color ){
        // return $color;
        return view('admin.colors.edit', compact('color'));
     }
     public function update(ColorFormRequest $request, $color_id){
      $validatedData = $request->validated();
      $validatedData['status'] = $request->status == true ? '1':'0';
      Color::find($color_id)->update($validatedData);
      return redirect()->back()->with('message', 'Data Updated Successfully !!!');
     }

     public function delete($id){
         $colors = Color::findOrFail($id);
         $colors->status = '1';
         $colors->update();
         return redirect()->back()->with('message', 'Data deleted successfully');
     }

     public function deletedrecords(){
      $colors = Color::where('status', '1')->get();
      return view('admin.colors.delete', compact('colors'));
     }
     
     public function deletedrestore($id){
      $colors = Color::findOrFail($id);
      $colors->status = '0';
      $colors->update();
      return redirect()->back()->with('message', 'Data Re-Stored');
     }
}
