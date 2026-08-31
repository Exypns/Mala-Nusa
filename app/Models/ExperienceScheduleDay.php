<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienceScheduleDay extends Model
{
    protected $fillable = [
        'experience_schedule_id',
        'day_number',
        'title',
        'sort_order'
    ];

    public function schedule() {
        return $this->belongsTo(ExperienceSchedule::class);
    }

    public function itineraries() {
        return $this->hasMany(ExperienceItinerary::class)->orderBy('sort_order');
    }
    
}
