<div class="input-field">
    <input type="text" name="descricao" value="{{ isset($produto->descricao) ? $produto->descricao : '' }}">
    <label>Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="codbarra" maxlength="13" value="{{ isset($produto->codbarra) ? $produto->codbarra : '' }}">
    <label>Codigo de Barras</label>
</div>

<div class="input-field">
    <input type="text" name="material" value="{{ isset($produto->material) ? $produto->material : '' }}">
    <label>Material</label>
</div>

<div class="input-field">
    <input type="text" name="medidas" value="{{ isset($produto->medidas) ? $produto->medidas : '' }}">
    <label>Medidas</label>
</div>

<div class="input-field">
    <input type="text" name="origem" value="{{ isset($produto->origem) ? $produto->origem : '' }}">
    <label>Origem</label>
</div>

<div class="input-field">
    <input type="text" name="peso" value="{{ isset($produto->peso) ? $produto->peso : '' }}" >
    <label>Peso</label>
</div>


<div class="input-field">
    <label for="precaucoes">Precaucões</label>
    <textarea class="materialize-textarea" cols=60 id="precaucoes" rows="20" maxlength="500" wrap="hard" name="precaucoes" value="" >
        {{  isset($produto->precaucoes) ? $produto->precaucoes : '' }}
    </textarea>

</div>


<div class="input-field">
    <input type="text" name="valor" value="{{ isset($produto->valor) ? $produto->valor : '' }}" >
    <label>Valor</label>
</div>

<div class="file-field input-field">
    <div class="btn blue">
        <span>Imagem de Capa</span>
        <input type="file" name="imagem" accept="image/*">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>


@if(isset($produto->imagem))
<div class="input-field">
    <img width="120" src="{{ asset($produto->imagem)}}" alt="{{ $produto->descricao }}"/>
</div>
@endif

<div class="">
    <p>
        <input type="checkbox" id="publicar" name="publicado" {{ isset($produto->publicado) &&  $produto->publicado == 'sim' ? 'checked' : ''}} value="true">
        <label for="publicar">Publicar?</label>
    </p>
    <br><br>
</div>