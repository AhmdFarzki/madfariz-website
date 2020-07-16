<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $items = Portfolio::with(['portfolios'])->get();
        // $website = Portfolio::where('category','website')->orderBy('id', 'asc')->get();
        // $design = Portfolio::where('category','design')->orderBy('id', 'asc')->get();
        return view('pages.portfolio', [
            'items' => $items
            // 'website' => $website   
        ]);
        
        
    }
}
