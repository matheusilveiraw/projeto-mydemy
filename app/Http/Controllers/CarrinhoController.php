<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function carrinhoLista() { 
        $itens = CartFacade::getContent(); //aliases não funciona por alguma razão
        dd($itens);
    }
}