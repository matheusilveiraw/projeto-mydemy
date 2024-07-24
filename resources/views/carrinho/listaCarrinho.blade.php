@extends('layout')

@section('titulo', 'Carrinho')

@section('conteudo')

<div class="mx-auto carrinho-layout">
    @if ($sucesso)
    <div class="card mt-5 mb-5">
        <div class="card-body">
            {{$sucesso}}
        </div>
    </div>
    @endif

    <h1>Seu carrinho possui {{$itens->count()}} cursos </h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Remover</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($itens as $i)
            <tr>
                <td><img class="carrinho-imgs-lista" src="{{$i->attributes->image}}" alt=""></td>
                <td class="align-middle">{{$i->name}}
                </td>
                <td class="align-middle">R${{ number_format($i->price, 2, ',', '.') }}</td>
                <td class="align-middle"> <button type="button" class="btn btn-danger">Danger</button> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection