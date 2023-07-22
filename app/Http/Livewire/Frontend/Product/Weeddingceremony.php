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

class Weeddingceremony extends Component
{
    public $products, $allData, $brandInputs = [], $priceInput; 

    protected $queryString = [
        'brandInputs' => ['except' => '', 'as' => 'brand'],
        'priceInput' => ['except' => '', 'as' => 'vegprice_one'],
    ];

    public function mount( $allData)
    {
        $this->allData = $allData;
    }
    public function render()
        {
        
        $this->products=Product::where('wedding_ceremony', $this->id)
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

        return view('livewire.frontend.product.weeddingceremony', [
            'products' => $this->products,
            'allData' => $this->allData,
        ]); 
         
    }
}
