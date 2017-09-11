@extends('layout.site')

@section('titulo', $produto->descricao)

@section('conteudo')
    <br>
    <div class="card-image col-lg-4">
        <img height="250" src="{{asset($produto->imagem)}}">

    </div>
    <div class="container col-lg-8">

        <div class="row row--component-margin">

            <div class="col-xxs-8 right-col">
                <div class="clp-component-render">

                    <div class="text center-block">
                        <div class="requirements__title">
                            <h3>{{ $produto->descricao }}</h3>
                        </div>
                        <div class="text-center">
                            <ul class="requirements__list">

                                <li class="text-capitalize">{{ $produto->descricao }}</li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <h3 class="center" title="{{$produto->descricao}}"></h3>

    </div>
@endsection

