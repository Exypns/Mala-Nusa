<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienceItinerary extends Model
{
    protected $fillable = [
        'experience_schedule_day_id',
        'time',
        'title',
        'description',
        'sort_order'
    ];

    protected $touches = ['scheduleDay'];

    public function scheduleDay() {
        return $this->belongsTo(ExperienceScheduleDay::class);
    }
}
