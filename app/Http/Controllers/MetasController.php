<?php

namespace App\Http\Controllers;

use App\metas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

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
        
        return view('graficos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request);
       
        DB::table('produtos')->insert([

            'produto'=> $request->produto,
            'data'=> $request->data,
            'marca'=> $request->marca,
            'quantidade' => $request->quantidade,
            'valor' => $request->valor,
            'peso' =>  $request->peso,
            'codigo' => $request->codigo
         ]);

        
       
         return redirect()->route('graficos.metas');
      
    }


    public function formata_data($data){
        $d = substr($data,6,4) . "-" . substr($data,3,2) . "-" . substr($data,0,2);
 
        return $d;
 
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
