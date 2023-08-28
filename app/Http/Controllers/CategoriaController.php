<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class categoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = categoria::get();
        return view (('categoria.categoria_index'), ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoria.categoria_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$categorias = new categoria();
        //$categorias->nome = 'sabão em pó';
       // $categorias->quantidade = 70;
       // $categorias->preco = 10.5;
        //$categorias->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categorias = categoria::find($id);
        dd($categorias);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categorias = categoria::find($id);
        $categorias->nome = 'agua sanitaria';
        $categorias->quantidade = 90;
        $categorias->preco = 3.5;
        $categorias->save();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categorias = categoria::find($id);
        $categorias->delete();
    }
}
