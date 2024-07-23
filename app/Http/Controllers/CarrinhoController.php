<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Darryldecode\Cart\Facades\CartFacade;
use Darryldecode\Cart\Validators\Validator;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function carrinhoLista() { 
        $itens = CartFacade::getContent(); //aliases não funciona por alguma razão
        $categoriasTodas = Categorias::all(); //para usar no navbar

        return view('carrinho.listaCarrinho', compact('itens', 'categoriasTodas'));

        return redirect()->route('carrinho.listaCarrinho')->with('sucesso', 'Curso adicionado no carrinho com sucesso');
    }

    public function addCarrinho(Request $request) {
        CartFacade::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => [
                'image' => $request->img
            ]
        ]);

        return $this->carrinhoLista();
    }
}