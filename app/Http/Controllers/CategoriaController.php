<?php

namespace Frutas\Http\Controllers;

use Frutas\Categorias;
use Illuminate\Http\Request;




class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Categorias::all();
        return view('Categoria.index', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request;
        $categoria = new Categorias();
        $categoria->categoria = $request->input('categoria');
        $categoria->descripcion = $request->input('descripcion');
        $categoria->slug= time();
        $categoria->save();
        return redirect('categorias');
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
    public function edit(Categorias $categoria)
    {

        return view('Categoria.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorias $categoria)
    {
//        return $categoria;
//        return $request;

        $categoria->fill($request->all());
        $categoria->save();
        return redirect('categorias');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorias $categoria)
    {
        $categoria->delete();
        return redirect('categorias');
    }
}
