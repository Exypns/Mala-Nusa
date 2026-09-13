<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Override;

class Experience extends Model
{
    //
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'duration',
        'location',
        'price',
        'min_guests',
        'max_guests',
        'published',
        'featured',
        'is_most_booked'
    ];

    protected function casts() : array
    {
        return [
            'published' => 'boolean',
            'featured' => 'boolean',
            'is_most_booked' => 'boolean',
            'price' => 'integer'
        ];
    }

    public function schedules() {
        return $this->hasMany(ExperienceSchedule::class)->orderBy('sort_order');
    }

    public function practicalInfo() {
        return $this->hasMany(ExperiencePracticalInfo::class);
    }

    public function stay() {
        return $this->hasMany(ExperienceStay::class)->orderBy('sort_order');
    }

    public function inclusion() {
        return $this->hasMany(ExperienceInclusion::class)->orderBy('sort_order');
    }

    public function faq() {
        return $this->hasMany(ExperienceFaq::class)->orderBy('sort_order');
    }

    public function image() {
        return $this->hasMany(ExperienceImage::class)->orderBy('sort_order');
    }

    public function coverImage() {
        return $this->hasOne(ExperienceImage::class)->where('is_cover', true);
    }

}
