@extends('layout.site')

@section('titulo', 'Produto')

@section('conteudo')
    <div class="container">
        <h3 class="center">Editando {{ $produto->descricao }}</h3>
        <div class="row">
            <form class="" action="{{ route('admin.produtos.atualizar', $produto->codbarra) }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
                @include('admin.produtos._form')

                <button class="waves-effect waves-light btn deep-orange">Atualizar</button>
                <button class="waves-effect waves-light btn red" href="{{ route('admin.produtos')}}">Cancelar</button>
            </form>
        </div>
    </div>


@endsection

