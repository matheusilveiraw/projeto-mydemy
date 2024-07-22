<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Cursos;
use App\Models\Professores;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $categoriaIds = range(1, 13);
        shuffle($categoriaIds);
        $categoriaIds = array_slice($categoriaIds, 0, 3);

        $categoriaIdsPrincipaisCategorias = range(1, 13);
        shuffle($categoriaIdsPrincipaisCategorias);
        $categoriaIdsPrincipaisCategorias = array_slice($categoriaIdsPrincipaisCategorias, 0, 8);


        $categoriasListagemCursos = Categorias::whereIn('id', $categoriaIds)->get();
        $cursos = Cursos::whereIn('id_categoria', $categoriaIds)->get();
        $professores = Professores::all();
        $categoriasTodas = Categorias::all(); //para usar no navbar
        $categoriasPrincipaisCategorias = Categorias::whereIn('id', $categoriaIdsPrincipaisCategorias)->get();

        return view('index', compact('categoriasTodas', 'categoriasListagemCursos', 'categoriasPrincipaisCategorias', 'cursos', 'professores'));
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
    public function show(Categorias $categorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorias $categorias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorias $categorias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorias $categorias)
    {
        //
    }
}
