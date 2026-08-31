<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienceImage extends Model
{
    protected $fillable = [
        'experience_id',
        'image',
        'alt_text',
        'is_cover',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'is_cover' => 'boolean',
        ];
    }

    public function experience() {
        return $this->belongsTo(Experience::class);
    }
}
