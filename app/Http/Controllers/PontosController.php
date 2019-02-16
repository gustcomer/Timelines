<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ponto;

class PontosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pontos = Ponto::all();
        
        return view('pontos.index',compact('pontos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pontos.create');
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
            'timeline_id' => ['required'],
            'data' => ['required'],
            'descricao' => ['required','min:5']
        ]);
        Ponto::create($attributes);

        return redirect('/timelines/'.$attributes['timeline_id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ponto $ponto)
    {
        $timeline = $ponto->timeline;
        return view('pontos.edit', compact('ponto','timeline'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ponto $ponto)
    {
        $ponto->update(request(['data', 'descricao']));

        return redirect('/timelines/'.$ponto->timeline->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Ponto $ponto)
    {
        $id = $ponto->timeline->id; // timeline()->id não funciona
        $ponto->delete();
        
        return redirect('/timelines/'.$id);
    }
}
