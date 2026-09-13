<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienceFaq extends Model
{
    protected $fillable = [
        'experience_id',
        'question',
        'answer',
        'sort_order'
    ];

     protected $touches = ['experience'];

    public function experience() {
        return $this->belongsTo(Experience::class);
    }
}
