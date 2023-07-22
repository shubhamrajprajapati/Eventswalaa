<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;

class Blogindex extends Component
{

    public $blogcategory, $blogsdata;

    public function mount($blogcategory, $blogsdata){
        $this->blogcategory = $blogcategory;
        $this->blogsdata = $blogsdata;

    }

    public function render()
    {
        return view('livewire.frontend.product.blogindex', [
            'blogcategory' => $this->blogcategory,
            'blogsdata' => $this->blogsdata,
        ]); 
    }
}
