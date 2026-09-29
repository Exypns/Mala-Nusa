<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImpactStory extends Model
{
    protected $fillable = [
        'type',
        'title',
        'image',
        'short_description',
        'coming_date',
        'is_visible',
        'sort_order'
    ];

    protected $casts = [
        'coming_date' => "date",
        'is_visible' => 'boolean'
    ];
}
