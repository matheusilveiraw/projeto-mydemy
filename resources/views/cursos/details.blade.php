@extends('layout')

@section('titulo', 'Detalhes do curso')

@section('conteudo')

<div class="card-detalhes mt5">
    <div class="card-informacoes-detalhes">
        <h2>{{$cursos->nome_curso}}</h2>
        @foreach ($professores->where('id', $cursos->id_professor) as $professor)
        <p>{{ $professor->nome_professor }}</p>
        @endforeach
        @foreach ($categoriasTodas->where('id', $cursos->id_categoria) as $categoria)
        <p>{{ $categoria->nome_categoria }}</p>
        @endforeach
        <p>{{ $cursos->descricao_curso }}</p>
        <p class="preco-curso">R${{ number_format($cursos->preco, 2, ',', '.') }}</p>
    </div>
    <div>
        <img class="card-img-detalhes" src="{{ $cursos->img_curso }}" alt="{{ $cursos->nome_curso }}">
    </div>
</div>
@endsection