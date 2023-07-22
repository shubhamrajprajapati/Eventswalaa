<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listbusiness extends Model
{
    use HasFactory;
    protected $table = 'listyourbusiness';
    protected $fillable = [
        'venue_name',
        'country',
        'state',
        'city',
        'address',
        'max_capacity',
        'description',
        'venue_url',
        'owner_name',
        'owner_phone',
        'owner_email',
        'terms',
    ];
}
