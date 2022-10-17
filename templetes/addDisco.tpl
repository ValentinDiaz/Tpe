
<div>
    <form action="add" method="POST" class="form_dico">
        <div>
            <label>Titulo:</label>
            <input type="text" name="titulo">
        </div>
        <div>
            <label>Artista:</label>
            <input type="text" name="artista">
        </div>
        <div>
            <label>Año:</label>
            <input type="text" name="año">
        </div>
        <div>
            <select name ="generos" id="generos">
                {foreach from=$generos item=$genero}
                    <option value="{$genero->id_genero}">{$genero->genero} </option>
                {/foreach}
            </select>
        </div>
        <button type="submit">Guardar</button>
    </form>
</div>