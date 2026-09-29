<?php

namespace App\Http\Controllers;

use App\Models\ImpactStory;
use Illuminate\Http\Request;

class ImpactController extends Controller
{
    public function index() 
    {
        $stories = ImpactStory::query()
            ->where('is_visible', true)    
            ->orderBy('sort_order')
            ->get();

        return view('pages.impact', compact('stories'));
    }
}
