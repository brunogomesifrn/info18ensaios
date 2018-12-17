<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Espaco;
use Auth;   
class EspacoControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $espacos = Espaco::all();
        return view('locais', compact('espacos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('locais_cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $apelido = $request->input('apelido');
        $descricao = $request->input('descricao');
        $endereco = $request->input('endereco');
        $foto = $request->file('foto')->store('locais', 'public');

        $espaco = new Espaco();
        $espaco->apelido = $apelido;
        $espaco->descricao = $descricao;
        $espaco->endereco = $endereco;
        $espaco->foto = $foto;
        $espaco->user_id = Auth::user()->id;

        $espaco->save();

        return redirect('/espacos');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
