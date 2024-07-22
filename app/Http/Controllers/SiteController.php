<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Cursos;
use App\Models\Professores;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function details($slug) { 
        $cursos = Cursos::where('slug', $slug)->first();
        $categoriasTodas = Categorias::all(); //para usar no navbar (tem que ser esse nome pois foi utilizada assim na navbar pra diferenciar)
        $professores = Professores::all();

        return view('cursos.details', compact('categoriasTodas', 'cursos', 'professores'));
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        //
    }
}
