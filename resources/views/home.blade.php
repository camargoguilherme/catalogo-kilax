@extends('layout.site')

@section('titulo', 'Produtos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Produtos</h3>
        <div class="row">
          @foreach($produtos as $produto)
                    <div class="col m3 center">

                        <div class="card">
                            <div class="card-image">
                                <img id="{{$produto->codbarra}}" height="140" alt="{{ $produto->descricao }}" src="http://www.g39.com.tw/images/detail/1304/4560177466734(R).jpg">

                            </div>
                            <div class="card-content">
                                <h4>{{$produto->titulo}}</h4>
                                <p>{{$produto->descricao}}</p>
                                <a href="{{ route('detalhes.produto', $produto->codbarra) }}"> Ver mais...</a>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>


@endsection

