@extends('layout.site')

@section('titulo', 'Produtos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Produtos</h3>
        <div class="row">
            <script>


                function firebaseStorage() {
                    // Initialize Firebase
                    var config = {
                        apiKey: "AIzaSyAWubi8YCs_kmNaS5-pw5Uau4CHEbUbveI",
                        authDomain: "kilax-japan.firebaseapp.com",
                        databaseURL: "https://kilax-japan.firebaseio.com",
                        projectId: "kilax-japan",
                        storageBucket: "kilax-japan.appspot.com",
                        messagingSenderId: "843171232021"
                    };
                    /*
                    firebase.initializeApp(config);
                    // Get a reference to the storage service, which is used to create references in your storage bucket
                    // Get a reference to the storage service, which is used to create references in your storage bucket
                    var storage = firebase.storage();
                    */
                    return config;
                }

            </script>
            <button class="waves-effect waves-light btn green" onclick="a('texto')">Firebase</button>

            @foreach($produtos as $produto)
                @if($produto->publicado == 'sim')
                    <div class="col s12 m3">

                        <div class="card">
                            <div class="card-image">
                                @foreach($imagems as $imagem)

                                    @if($imagem->id_produto == $produto->id && $imagem->capa == 'sim')
                                        <img height="140" src="{{asset($imagem->imagem)}}" alt="{{ $produto->descricao }}">
                                    @endif
                                @endforeach


                            </div>
                            <div class="card-content">
                                <h4>{{$produto->titulo}}</h4>
                                <p>{{$produto->descricao}}</p>
                            </div>
                            <div class="card-action">
                                <a href="{{ route('detalhes.produto', $produto->id) }}">Ver mais...</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>


@endsection

