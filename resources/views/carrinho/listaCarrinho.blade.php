@extends('layout')

@section('titulo', 'Carrinho')

@section('conteudo')

<div class="mx-auto carrinho-layout">

    @switch($valorMsg)
    @case(1)
    <div class="card mt-5 mb-5">
        <div class="card-body" style="background-color: lightgreen;">
                O curso foi adicionado ao carrinho!
        </div>
    </div>
    @break

    @case(2)
    <div class="card mt-5 mb-5">
        <div class="card-body" style="background-color: rgba(255, 0, 0, 0.651);">
            O curso foi removido do carrinho!
        </div>
    </div>
    @break
    @endswitch

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
                <td><img class="carrinho-imgs-lista align-middle text-center" src="{{$i->attributes->image}}" alt=""></td>
                <td class="align-middle">{{$i->name}}
                </td>
                <td class="align-middle">R${{ number_format($i->price, 2, ',', '.') }}</td>
                <td class="align-middle">
                    <form action="{{ route('carrinho.removecarrinho') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $i->id }}">
                        <button type="submit" class="btn btn-danger"><i data-feather="trash-2"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection