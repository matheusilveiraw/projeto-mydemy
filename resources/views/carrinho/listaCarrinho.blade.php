@extends('layout')

@section('titulo', 'Carrinho')

@section('conteudo')

<div class="card-detalhes mt5">
    <div class="card-informacoes-detalhes">
        <h1>Seu carrinho possui {{$itens->count()}} cursos </h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Ações aqui</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($itens as $i)
                <tr>
                    <td><img src="$item->attributes->image" width="70" alt=""></td>
                    <td>{{$i->name}}
                    </td>
                    <td>{{$i->price}}</td>
                    <td> <button>Remover</button> </td>
                </tr>
                @endforeach


            </tbody>
        </table>


    </div>
    @endsection