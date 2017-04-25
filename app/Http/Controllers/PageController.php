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
            // $ss = Shakespeare::search($request->input('search'));
            $results = Shakespeare::search($request->input('search'))->toArray();
            // $total = $ss->totalHits();
            $total = 0;
        }
    	return view('src.index',compact('results'))
        // ->with([
        //     'total' => $total
        // ])
        ;
    }

    
}
