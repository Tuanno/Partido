<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrokenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brokens=\App\Broken::all();
        return view('broken/index',compact('brokens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('broken/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $broken= new \App\Broken;
        $broken->nome=$request->get('nome');
        $broken->sigla=$request->get('sigla');
        $broken->numero=$request->get('numero');
        $broken->endereco=$request->get('endereco');
        $broken->save();

        return redirect('brokens')->with('success', 'Information has been added');
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
    public function edit($id)
    {
        $broken = \App\Broken::find($id);
        return view('broken/edit',compact('broken','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $broken= \App\Broken::find($id);
        $broken->nome=$request->get('nome');
        $broken->sigla=$request->get('sigla');
        $broken->numero=$request->get('numero');
        $broken->endereco=$request->get('endereco');
        $broken->save();
        return redirect('brokens');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $broken = \App\Broken::find($id);
        $broken->delete();
        return redirect('brokens')->with('success','Information has been  deleted');
    }
}
