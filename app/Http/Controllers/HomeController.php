<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Portfolio;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        $items = Skill::all();
        $ports = Portfolio::limit(6)->get();

        return view('pages.home', [
            'items' => $items,
            'ports' => $ports
        ]);
    }
}
