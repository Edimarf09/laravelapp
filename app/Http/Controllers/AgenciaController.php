<?php

namespace App\Http\Controllers;

use App\Models\Agencia;
use Illuminate\Http\Request;

class AgenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agencias = Agencia::all();
        return view('agencias.index')->with('agencias',$agencias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agencias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome_agencia' => 'required',
            'agencia' => 'required',
            'banco_id' => 'required',
            'endereco' => 'required',
            'fone1' => 'required',
            'tipo1' => 'required|in:1,2',
            'fone2' => 'required',
            'tipo2' => 'required',
        ]);
        $validatedData = $request->all();
        Agencia::create($validatedData);
        return redirect('agencia')->with('flash_message', 'Agencia Adicionada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agencia = Agencia::find($id);
        return view('agencias.show')->with('agencias', $agencia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agencia = Agencia::find($id);
        return view('agencias.edit')->with('agencias', $agencia);
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
        $validatedData = $request->validate([
            'nome_agencia' => 'required',
            'agencia' => 'required',
            'banco_id' => 'required',
            'endereco' => 'required',
            'fone1' => 'required',
            'tipo1' => 'required|in:1,2',
            'fone2' => 'required',
            'tipo2' => 'required',
        ]);
        $agencia = Agencia::find($id);
        $validatedData = $request->all();
        $agencia->update($validatedData);
        return redirect('agencia')->with('flash_message', 'Agencia Atualizada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Agencia::destroy($id);
        return redirect('agencia')->with('flash_message', 'Agencia Deletada!');
    }
}
