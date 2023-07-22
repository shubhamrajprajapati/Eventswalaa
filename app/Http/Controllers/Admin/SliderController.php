<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Http\Requests\SliderFormRequest;

class SliderController extends Controller
{
     public function index(){
        $sliders = Slider::where('status', '0')->get();
        return view('admin.slider.index', compact('sliders'));
     }
     public function create(){
        return view('admin.slider.create');
     }
     public function store(SliderFormRequest $request){
        // php artisan make:request SliderFormRequest
        $validatedData = $request->validated();

        if($request->hasFile('image')) {
         $file = $request->file('image');
         $ext = $file->getClientOriginalExtension();
         $filename = time().'.'.$ext;
         $file->move('uploads/slider/',$filename);
         $validatedData['image'] = "uploads/slider/$filename";
        }

        $validatedData['status'] = $request->status == true ? '1':'0';

        Slider::create([

         'title' => $validatedData['title'],
        'description' => $validatedData['description'],
        'link' => $validatedData['link'],
        'image' => $validatedData['image'],
        'status' => $validatedData['status'],

        ]);

        return redirect()->back()->with('message', 'Slider added successfully !!');

     }
}
