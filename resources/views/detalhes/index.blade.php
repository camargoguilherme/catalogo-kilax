@extends('layout.site')

@section('titulo', $produto->descricao)

@section('conteudo')
    <div class="container center" >
        <div class="">
            <div>
                <h1>{{ $produto->descricao }}</h1>
            </div>
        </div>
        <div class="row" id="">
            <div class=""  >
                <div class="carousel carousel-slider center">
                    <a class="carousel-item"  href=""><img src="http://www.g39.com.tw/images/detail/1304/4560177466734(R).jpg"></a>
                </div>
            </div>
        </div>

    </div>

@endsection

