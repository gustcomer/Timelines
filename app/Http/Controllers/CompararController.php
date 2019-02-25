<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Timeline;

class CompararController extends Controller
{
    public function index()
    {
        $timelines = Timeline::where('owner_id',auth()->id())->get();
        
        return view('comparar.index',compact('timelines'));
    }

    public function show(Request $request)
    {
    	// $test = $request->all();

        $timeline1 = Timeline::find($request->timeline[0]);
        $timeline2 = Timeline::find($request->timeline[1]);

        $pontos1 = $timeline1->pontos;
        $pontos2 = $timeline2->pontos;

        $merged = $pontos1->merge($pontos2);

		$sorted_points = $merged->sortBy(function ($point, $key) {
		    return $point->data;
		});
        
        return view('comparar.show',compact('timeline1','timeline2','sorted_points'));
    }

/*    public function show(Request $request)
    {
    	// $test = $request->all();

        $timeline1 = Timeline::find($request->timeline[0]);
        $timeline2 = Timeline::find($request->timeline[1]);

        $pontos1 = $timeline1->pontos;
        $pontos2 = $timeline2->pontos;

        $merged = $pontos1->merge($pontos2);

		$dates = $merged->map(function ($item, $key) {
		    return $item->data;
		});

		$sorted_dates = $dates->sort();

        dd($pontos1,$pontos2,$merged,$dates,$sorted_dates);
        
        return view('comparar.show',compact('timeline1','timeline2'));
    }*/
}
