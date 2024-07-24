<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Darryldecode\Cart\Facades\CartFacade;
use Darryldecode\Cart\Validators\Validator;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function carrinhoLista($valorMsg = 0) { 
        $itens = CartFacade::getContent(); //aliases não funciona por alguma razão
        $categoriasTodas = Categorias::all(); //para usar no navbar

        if($valorMsg) { 
            return view('carrinho.listaCarrinho', compact('itens', 'categoriasTodas', 'valorMsg'));
        }

        return view('carrinho.listaCarrinho', compact('itens', 'categoriasTodas'));
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

        return $this->carrinhoLista(1);
    }

    public function removeCarrinho(Request $request) { 
        CartFacade::remove($request->id);

        return $this->carrinhoLista(2);
    }
}