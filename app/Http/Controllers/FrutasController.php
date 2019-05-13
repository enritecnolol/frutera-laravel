<?php

namespace Frutas\Http\Controllers;

use Frutas\Categorias;
use Frutas\Fruta;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FrutasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frutas = Fruta::all();
        return view('Frutas.index', compact('frutas'));
//        return $frutas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = Categorias::all();
//          dd($categoria);
        return view('Frutas.create', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if ($request->hasFile('img')){
            $file = $request->file('img');
            $file->storeAs('/', $file->getClientOriginalName());

        }

        $frutas = new Fruta();
        $frutas->name = $request->input('nombre');
        $frutas->description = $request->input('descripcion');
        $frutas->slug = time();
        $frutas->precio=$request->input('precio');
        $frutas->fruta=$file->getClientOriginalName();
        $frutas->save();

        $frutas->categorias()->attach($request->input('categorias'));

        return redirect('frutas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Fruta $fruta)
    {
//        $fruta = Fruta::where('slug', '=',$slug)->firstOrFail();
//       $fruta = Fruta::find($id);
        $categoria = Categorias::all();

        return view('Frutas.show', compact('fruta', 'categoria'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Fruta $fruta)
    {
        $categoria = Categorias::all();
        return view('Frutas.edit', compact('fruta', 'categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fruta $fruta)
    {
//        return $fruta;
//        return $request;
        $fruta->fill($request->except('fruta'));
        if ($request->hasFile('img')){
            $file = $request->file('img');
            $file->storeAs('/', $file->getClientOriginalName());
            $fruta->fruta = $file->getClientOriginalName();
        }
        $fruta->save();
        return redirect('frutas');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fruta $fruta)
    {
        $fruta->delete();
        return redirect('frutas');
    }
}
