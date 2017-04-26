<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Shakespeare;
use App\Item;

class PageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        if($request->has('search')){
            $results = Shakespeare::search($request->input('search'));
            $total = $results->totalHits();
        }
    	return view('src.index')
            ->with([
                'results' => $results,
                'total' => $total
        ])
        ;
    }

    
}
