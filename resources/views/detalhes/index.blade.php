@extends('layout.site')

@section('titulo', $produto->descricao)

@section('conteudo')
    <div class="container">
        <br>
        <div class="row">
            <div class="" >
                <div class="carousel carousel-slider center">

                    @foreach($imagems as $imagem)
                                <a class="carousel-item" href=""><img src="{{asset($imagem->imagem)}}"></a>
                    @endforeach
                </div>
            </div>

            <div class="col s8">
                <div class="titulo">Descrição</div>
                <p class="caption">{{ $produto->descricao }}</p>
                <div class="titulo">Código de Barra</div>
                <p class="caption">{{ $produto->codbarra }}</p>
                <div class="titulo">Material</div>
                <p class="caption">{{ $produto->material }}</p>
                <div class="titulo">Medidas</div>
                <p class="caption">{{ $produto->medidas }}</p>
                <div class="titulo">Origem</div>
                <p class="caption">{{ $produto->origem }}</p>
                <div class="titulo">Peso</div>
                <p class="caption">{{ $produto->peso }}</p>
                <div class="titulo">Precauções</div>
                <p class="caption">{{ $produto->precaucao }}</p>
                <div class="titulo">Valor</div  >
                <p class="caption">{{ $produto->valor }}</p>
            </div>
        </div>
    </div>

@endsection

