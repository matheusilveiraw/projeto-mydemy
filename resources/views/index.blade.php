@extends('layout')

@section('titulo', 'Página Inicial')

@section('index')

<div class="container">
    <img src="{{ asset('img/img-a-promocao-de-gratidao.png')}}" alt="Imagem" class="image">
    <div class="text-overlay">
        <h1>A promoção de gratidão ao aluno termina hoje</h1>
        <p>Aproveite ofertas especiais de agradecimentos agoa com cursos a partir de R$24,90!</p>
    </div>
</div>

<div class="container-patrocinadores gray-large">
    <h2>Credibilidade perante mais de 15.000 empresas e milhões de alunos em todo o mundo</h2>
    <div class="lista-patrocinadores">
        <ul>
            <li class="patrocinadores"><img src="{{ asset('img/volksvagem.svg')}}" alt=""></li>
            <li class="patrocinadores"><img src="{{ asset('img/samsung.svg')}}" alt=""></li>
            <li class="patrocinadores"><img src="{{ asset('img/cisco.svg')}}" alt=""></li>
            <li class="patrocinadores"><img src="{{ asset('img/vimeo.svg')}}" alt=""></li>
        </ul>
        <ul>
            <li class="patrocinadores"><img src="{{ asset('img/PeG.svg')}}" alt=""></li>
            <li class="patrocinadores"><img src="{{ asset('img/hewlett-packard.svg')}}" alt=""></li>
            <li class="patrocinadores"><img src="{{ asset('img/citi.svg')}}" alt=""></li>
            <li class="patrocinadores"><img src="{{ asset('img/ericsson.svg')}}" alt=""></li>
        </ul>
    </div>
</div>

<div class="painel-cursos">
    <h2>Uma ampla seleção de cursos</h2>
    <p>Escolha entre mais de 220.000 cursos em vídeo online com novas adições publicadas mensalmente</p>

    @foreach ($categoriasListagemCursos as $categoria)
    <h3>{{ $categoria->nome_categoria }}</h3>

    <div class="card-grande-cursos">

        <h3>{{ $categoria->sub_titulo_categoria }}</h3>
        <p>{{ $categoria->descricao_categoria }}</p>


        <div class="cursos-horizontal">
            @foreach ($cursos->where('id_categoria', $categoria->id)->take(24) as $curso)
            <div class="card-curso">
                <img class="img-curso" src="{{ $curso->img_curso }}" alt="{{ $curso->nome_curso }}">
                <h4 class="nome-curso">{{ Str::limit($curso->nome_curso, 40)}}</h4>
                @foreach ($professores->where('id', $curso->id_professor) as $professor)
                <p class="nome-professor">{{ Str::limit($professor->nome_professor, 30)}}</p>
                @endforeach
                <p class="preco-curso">R${{ number_format($curso->preco, 2, ',', '.') }}</p>
            </div>
            @endforeach
        </div>

    </div>
    @endforeach
</div>

@php
$contador = 0;
@endphp

<div class="principais-categorias">
    <h3>Principais categorias</h3>
    @foreach ($categoriasPrincipaisCategorias as $categoria)
    @if($contador == 0 || $contador == 4)

    <ul class="categorias-lista">
        <li class="categoria-item">
            <img src="{{ $categoria->img_categoria }}" alt="">
            <h3>{{ $categoria->nome_categoria }}</h3>
        </li>
        @else
        <li class="categoria-item">
            <img src="{{ $categoria->img_categoria }}" alt="">
            <h3>{{ $categoria->nome_categoria }}</h3>
        </li>
        @endif

        @if($contador == 3 || $contador == 7)
    </ul>
    @endif

    @php
    $contador++;
    @endphp
    @endforeach
</div>
@endsection