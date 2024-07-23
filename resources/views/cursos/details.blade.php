@extends('layout')

@section('titulo', 'Detalhes do curso')

@section('conteudo')

<div class="card-detalhes mt5">
    <div class="card-informacoes-detalhes">
        <h1 style="margin: 0; padding: 0">{{$cursos->nome_curso}}</h1>
        @foreach ($professores->where('id', $cursos->id_professor) as $professor)
        @php
            $professor = $professor->nome_professor;
        @endphp
        <p class="detalhes-professor-categoria">Por {{ $professor }} </p>
        @endforeach
        @foreach ($categoriasTodas->where('id', $cursos->id_categoria) as $categoria)
        @php
            $categoria = $categoria->nome_categoria;
        @endphp
        <p>{{ $categoria }}</p>
        @endforeach
        <p>{{ $cursos->descricao_curso }}</p>
        <p class="preco-curso">R${{ number_format($cursos->preco, 2, ',', '.') }}</p>

        <form action="{{route('carrinho.addcarrinho')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$cursos->id}}">
            <input type="hidden" name="name" value="{{$cursos->nome_curso}}">
            <input type="hidden" name="price" value="{{$cursos->preco}}">
            <input type="hidden" name="professor_curso" value="{{$professor}}">
            <input type="hidden" name="categoria_curso" value="{{$categoria}}">
            <input type="hidden" name="quantity" value="1">
            <input type="hidden" name="img" value="{{$cursos->img_curso}}">
            <button class="btn btn-outline-success">Comprar</button>        
        </form>
    </div>
    <div>
        <img class="card-img-detalhes" src="{{ $cursos->img_curso }}" alt="{{ $cursos->nome_curso }}">

    </div>
</div>
@endsection