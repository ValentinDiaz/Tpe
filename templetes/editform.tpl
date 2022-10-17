{include file="templetes/header.tpl"}

<form action="addEdit" method="POST">

    <div>
        <label>Titulo:</label>
        <input type="text" name="titulo">

        <label>Artista:</label>
        <input type="text" name="artista">

        <label>Año:</label>
        <input type="text" name="año">

        <select name ="generos" id="generos">
                    {foreach from=$generos item=$genero}
                    <option value="{$genero->id_genero}">{$genero->genero} </option>
                    {/foreach}
        </select>
        <input type="hidden" value="{$disco->id}" name="id">
    </div>

    <button type="submit">Guardar</button>
</form>