<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = Portfolio::with(['detail'])->where('slug', $slug)->firstOrFail();
        return view('pages.detail',[
            'item' => $item
        ]);
    }
}
