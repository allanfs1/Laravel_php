<?php

namespace App\Http\Controllers;

use App\metas;
use Illuminate\Http\Request;

class MetasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = metas::all();
        return view("graficos.metas",compact('dados'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\metas  $metas
     * @return \Illuminate\Http\Response
     */
    public function show(metas $metas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\metas  $metas
     * @return \Illuminate\Http\Response
     */
    public function edit(metas $metas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\metas  $metas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, metas $metas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\metas  $metas
     * @return \Illuminate\Http\Response
     */
    public function destroy(metas $metas)
    {
        //
    }
}
