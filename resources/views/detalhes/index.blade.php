@extends('layout.site')

@section('titulo', $produto->descricao)

@section('conteudo')
    <div class="container">
        <nav>
            <div class="card-image">
                <img height="250" src="{{asset($produto->imagem)}}">

            </div>
            <h3 class="center" title="{{$produto->descricao}}"></h3>
        </nav>
    </div>


@endsection

