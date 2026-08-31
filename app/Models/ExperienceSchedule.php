<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienceSchedule extends Model
{
    protected $fillable = [
        'experience_id',
        'title',
        'description',
        'sort_order'
    ];

    public function experience() {
        return $this->belongsTo(Experience::class);
    }

    public function days() {
        return $this->hasMany(ExperienceScheduleDay::class)->orderBy('sort_order');
    }
}
