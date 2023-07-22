<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductImage;
use Illuminate\Support\Facades\File;
use App\Models\Color;
use App\Models\ProductColor;

class Index extends Component
{
    public $products, $category, $brandInputs = [], $priceInput, $searchcategories; 

    protected $queryString = [
        'brandInputs' => ['except' => '', 'as' => 'brand'],
        'priceInput' => ['except' => '', 'as' => 'vegprice_one'],
    ];

    public function mount( $category, $searchcategories)
    {
        $this->category = $category;
        $this->searchcategories = $searchcategories;
    }
    public function render()
    {
        
        
        $this->products=Product::where('category_id', $this->category->id)
        ->when($this->brandInputs, function($q){
            $q->whereIn('brand', $this->brandInputs);
        })
        ->when($this->priceInput, function($q){

            $q->when($this->priceInput =='high-to-low', function($q2){
                $q2->orderBy('vegprice_one', 'DESC');
            })
            ->when($this->priceInput =='low-to-high', function($q2){
                $q2->orderBy('vegprice_one', 'ASC');
            });


        })
        ->where('status', '0')
        ->get();

        return view('livewire.frontend.product.index', [
            'products' => $this->products,
            'category' => $this->category,
            'searchcategories' => $this->searchcategories,
        ]); 
         
    }
}
