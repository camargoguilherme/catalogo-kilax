@extends('layout.site')

@section('titulo', 'Produtos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Produtos</h3>
        <div class="row">
          @foreach($produtos as $produto)
                    <div class="col s12 m3">

                        <div class="card">
                            <div class="card-image">
                                <img id="{{$produto->codbarra}}" height="140" alt="{{ $produto->descricao }}">

                            </div>
                            <div class="card-content">
                                <h4>{{$produto->titulo}}</h4>
                                <p>{{$produto->descricao}}</p>
                            </div>
                            <div class="card-action">
                                <a href="{{ route('detalhes.produto', $produto->codbarra) }}">Ver mais...</a>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>


@endsection

