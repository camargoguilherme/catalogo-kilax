@extends('layout.site')

@section('titulo', $produto->descricao)

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col s10 m10 l10" >
                <div class="scrollspy section">
                    <div class="carousel carousel-slider initialized">
                        <div class="carousel carousel-slider">
                            <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/800/400/food/1"></a>
                            <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/800/400/food/2"></a>
                            <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/800/400/food/3"></a>
                            <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/800/400/food/4"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s8 m2 l10">
                <h4>Descrição</h4>
                <p class="caption">{{ $produto->descricao }}</p>
                <h4>Código de Barra</h4>
                <p class="caption">{{ $produto->codbarra }}</p>
                <h4>Material</h4>
                <p class="caption">{{ $produto->material }}</p>
                <h4>Medidas</h4>
                <p class="caption">{{ $produto->medidas }}</p>
                <h4>Origem</h4>
                <p class="caption">{{ $produto->origem }}</p>
                <h4>Peso</h4>
                <p class="caption">{{ $produto->peso }}</p>
                <h4>Precauções</h4>
                <p class="caption">{{ $produto->precaucao }}</p>
                <h4>Valor</h4>
                <p class="caption">{{ $produto->valor }}</p>
            </div>
        </div>
    </div>

@endsection

