<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index(Request $request)
    {

        $items = Skill::with(['skills'])->get();
        return view('pages.skills', [
            'items' => $items
        ]);

        // $items = Skill::all();

        // return view('pages.skills', [
        //     'items' => $items
        // ]);
    }
}

