<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperiencePracticalInfo extends Model
{
    protected $fillable = [
        'experience_id',
        'title',
        'content',
        'sort_order',
    ];

    public function experience() {
        return $this->belongsTo(Experience::class);
    }

}
