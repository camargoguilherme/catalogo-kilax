@extends('layout.site')

@section('titulo', 'Produtos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Produtos</h3>

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Codigo de Barras</th>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th>Publicado</th>
                        <th>Imagem</th>
                        <th>Ação</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach($produtos as $registro)

                        <tr>
                            <td>{{ $registro->codbarra }}</td>
                            <td>{{ $registro->descricao }}</td>
                            <td>{{ $registro->valor }}</td>
                            <td>{{ $registro->publicado }}</td>
                            <td><img height="60" src="" alt="{{ $registro->descricao }}"></td>

                            <th></th>
                            <td>
                                <a class="waves-effect waves-light btn deep-orange"  data-target="#editModal" data-toggle="modal" href="{{ route('admin.produtos.editar', $registro->codbarra) }}">Editar</a>
                                <a class="waves-effect waves-light btn red view" onclick="$('#modal1').modal('open');">Deletar</a>
                                <!-- Modal Structure -->
                                <div id="modal1" class="modal">
                                    <div class="modal-content">
                                        <h4>{{ $registro->descricao.' - '.$registro->material }}</h4>
                                        <p class="waves-effect waves-light">Deseja excluir?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{route('admin.produtos.deletar', $registro->codbarra)}}" class="modal-action modal-close waves-effect waves-green btn-flat red">Deletar</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <div class="row">
            <a class="waves-effect waves-light btn blue" href="{{ route('admin.produtos.adicionar')}}">Adicionar</a>
        </div>
    </div>


@endsection

