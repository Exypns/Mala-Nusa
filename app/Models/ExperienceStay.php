<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienceStay extends Model
{
    protected $fillable = [
        'experience_id',
        'title',
        'sort_order'
    ];

    public function experience() {
        return $this->belongsTo(Experience::class);
    }
}
