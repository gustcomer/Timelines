<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Timeline;

class TimelinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $timelines = Timeline::where('owner_id',auth()->id())->get();
        
        return view('timelines.index',compact('timelines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'nome' => ['required','min:5']
        ]);

        $attributes['owner_id'] = auth()->id();

        Timeline::create($attributes);

        return redirect('/timelines');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        $timeline = Timeline::find($id);

        // if($timeline->owner_id !== auth()->id()) {
        //     abort(403);
        // }
        // dd($timeline->owner_id,auth()->id()); aqui dava pau
        abort_if($timeline->owner_id != auth()->id(),403);
        // abort_if(! auth()->user()->owns($timeline)); nem funciona

        $pontos = Timeline::find($id)->pontos;
        return view('timelines.show',compact('timeline','pontos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Timeline $timeline)
    {
        return view('timelines.edit', compact('timeline'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timeline $timeline)
    {
        $timeline->update(request(['nome']));

        return redirect('/timelines');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timeline $timeline)
    {
        $timeline->delete();

        return redirect('/timelines');
    }
}
