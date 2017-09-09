@extends('layout.site')

@section('titulo', 'Produtos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Produtos</h3>
        <div class="row">
            @foreach($produtos as $produto)
                @if($produto->publicado == 'sim')
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img height="250" src="{{asset($produto->imagem)}}">

                            </div>
                            <div class="card-content">
                                <h4>{{$produto->titulo}}</h4>
                                <p>{{$produto->descricao}}</p>
                            </div>
                            <div class="card-action">
                                <a href="{{ route('site.detalhes', $produto->id) }}">Ver mais...</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>


@endsection

