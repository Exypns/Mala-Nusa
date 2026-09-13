<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExperienceSchedule extends Model
{
    protected $fillable = [
        'experience_id',
        'title',
        'description',
        'sort_order'
    ];

    protected $touches = ['experience'];

    public function experience() {
        return $this->belongsTo(Experience::class);
    }

    public function days() : HasMany {
        return $this->hasMany(ExperienceScheduleDay::class)->orderBy('sort_order');
    }
}
