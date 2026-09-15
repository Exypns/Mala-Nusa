<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index() {
        $experience = Experience::query()
            ->where('published', true)
            ->with('coverImage')
            ->latest()
            ->get();

        return view('pages.explore', compact('experience'));
    }

    public function show(Experience $experience) {

        abort_unless($experience->published, 404);

        $experience->load([
            'image',
            'schedules.days.itineraries',
            'practicalInfo',
            'stay',
            'inclusion',
            'faq'
        ]);

        return view('pages.details', compact('experience'));
    }
}
