<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blogcategory;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    protected $fillable = [

        'blogcategory_id',
        'user_id',
        'name',
        'slug',
        'description',
        'image',
        'status',
        'meta_title',
        'meta_keyword',
        'meta_description',
    ];

    public function blogcategory()
    {
        return $this->belongsTo(Blogcategory::class, 'blogcategory_id', 'id');
    }
}
