<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog; 

class Blogcategory extends Model
{
    use HasFactory;
    protected $table = 'blogcategories';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'status',
    ];

    public function blogs(){
        return $this->hasMany(Blog::class, 'blogcategory_id', 'id');
    }
   
}
