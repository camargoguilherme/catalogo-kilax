@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Editando Produto</h3>
        <div class="row">
            <form class="" action="{{ route('admin.produtos.atualizar', $registro->codbarra) }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">

                @include('admin.produtos._form')

                <button class="waves-effect waves-light btn deep-orange">Atualizar</button>
                <button class="waves-effect waves-light btn red" href="{{route('admin.produtos')}}">Cancelar</button>
            </form>
        </div>
    </div>


@endsection

