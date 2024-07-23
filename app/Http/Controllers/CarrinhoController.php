<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Facades\CartFacade;
use Darryldecode\Cart\Validators\Validator;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function carrinhoLista() { 
        $itens = CartFacade::getContent(); //aliases não funciona por alguma razão
        dd($itens);
    }

    public function addCarrinho(Request $request) {
        echo $request->img;
   
        CartFacade::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => [
                'image' => $request->img
            ]
        ]);
    }
}