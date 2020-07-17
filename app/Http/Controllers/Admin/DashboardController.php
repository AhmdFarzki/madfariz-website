<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Portfolio;
use App\Models\Achievement;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {
        
        return view('pages.admin.dashboard',[
            'skills' => Skill::count(),
            'portfolio' => Portfolio::count(),
            'achievement' => Achievement::count()
        ]);
    }
}
