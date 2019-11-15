<?php

namespace App\Http\Controllers;

use App\site1;
use Illuminate\Http\Request;

class Site1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = site1::all();
        return view("graficos.graficos",compact('dados'));
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
     * @param  \App\site1  $site1
     * @return \Illuminate\Http\Response
     */
    public function show(site1 $site1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\site1  $site1
     * @return \Illuminate\Http\Response
     */
    public function edit(site1 $site1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\site1  $site1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, site1 $site1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\site1  $site1
     * @return \Illuminate\Http\Response
     */
    public function destroy(site1 $site1)
    {
        //
    }
}
