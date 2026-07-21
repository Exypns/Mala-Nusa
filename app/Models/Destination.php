<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    //
    protected $fillable = [ 'name', 'slug', 'shor_description', 'description', 'location', 'lat', 'lng', 'price', 'cover_image', 'is_featured', 'status'
    ];

    protected $casts = [ 
        'is_featured' => 'boolean',
        'price' => 'decimal:2'
     ];
}
