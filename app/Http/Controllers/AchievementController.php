<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index(Request $request)
    {
        $items = Achievement::with(['achievement'])->get();
        return view('pages.achievement', [
            'items' => $items
        ]);
        
        
    }
}
