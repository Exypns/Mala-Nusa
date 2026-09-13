<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienceInclusion extends Model
{
    protected $fillable = [
        'experience_id',
        'type',
        'description',
        'sort_order'
    ];

     protected $touches = ['experience'];

    public function experience() {
        return $this->belongsTo(Experience::class);
    }
}
