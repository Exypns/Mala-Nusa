<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $experience = Experience::query()
            ->where('published', true)
            ->where('featured', true)
            ->with('coverImage')
            ->latest('updated_at')
            ->take(3)
            ->get();
        
        return view('pages.home', compact('experience'));
    }
}
