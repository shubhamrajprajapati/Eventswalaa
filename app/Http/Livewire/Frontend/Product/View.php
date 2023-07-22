<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;

class View extends Component
{

    public $category,$product,$ratings,$rating_value,$ratings_show,$user_rating, $product_other_details ;

    public function mount($category, $product, $ratings, $rating_value, $ratings_show,$user_rating, $product_other_details){
        $this->category=$category;
        $this->product=$product;
        $this->ratings=$ratings;
        $this->rating_value=$rating_value;
        $this->ratings_show=$ratings_show;
        $this->user_rating=$user_rating;
        $this->product_other_details=$product_other_details;
    }
    public function render()
    {
        return view('livewire.frontend.product.view',[
            'category'=>$this->category, 
            'product'=>$this->product, 
            'ratings'=>$this->ratings, 
            'rating_value'=>$this->rating_value, 
            'ratings_show'=>$this->ratings_show, 
            'user_rating'=>$this->user_rating, 
            'product_other_details'=>$this->product_other_details, 
        ]);
    }
}
