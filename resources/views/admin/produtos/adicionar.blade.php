@extends('layout.site')

@section('titulo', 'Produtos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar Produto</h3>
        <div class="row">
            <form class="" action="{{ route('admin.produtos.salvar') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                @include('admin.produtos._form')

                <button class="waves-effect waves-light btn green">Salvar</button>
                <button class="waves-effect waves-light btn red" href="{{route('admin.produtos')}}" >Cancelar</button>

            </form>
        </div>
    </div>


@endsection

