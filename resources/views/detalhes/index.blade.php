@extends('layout.site')

@section('titulo', $produto->descricao)

@section('conteudo')
    <div class="container" >
        <br>
        <div class="row" id="">
            <div class="" >
                <div class="carousel carousel-slider center">
                    <a class="carousel-item" href=""><img src=""></a>
                </div>
            </div>
        </div>
        <div class="">
            <div class="col s12 center-block">
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

