<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Override;

class ExperienceImage extends Model
{
    protected $fillable = [
        'experience_id',
        'image',
        'alt_text',
        'is_cover',
        'sort_order',
    ];

     protected $touches = ['experience'];

    protected function casts(): array
    {
        return [
            'is_cover' => 'boolean',
        ];
    }

    protected static function booted(): void
    {
        static::saving(function (ExperienceImage $image) {
            if (! $image->is_cover || ! $image->experience_id) {
                return;
            }

            static::query()
                ->where('experience_id', $image->experience_id)
                ->when(
                    $image->exists,
                    fn ($query) => $query->whereKeyNot($image->getKey())
                )
                ->update([
                    'is_cover' => false,
                ]);
        });
    }

    public function experience() {
        return $this->belongsTo(Experience::class);
    }
}
