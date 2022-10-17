{include file="templetes/header.tpl"}
<p>agrega un genero</p>
<form action="{if $genero} editGenero  {else} addGenero {/if}" method="POST">
  {if $genero}
    <input type="hidden" name="id" value="{$genero->id_genero}" id="id"> 
  {/if}
  
  {if $isUser} 
    <input type="text" name="genero" id="genero" {if $genero} value="{$genero->genero}" {/if}> 
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
  {/if}
</form>  



<table>

  <tr>

    <td>Generos</td>
    {if $isUser} 
    <td>eliminar</td>

    <td>editar</td>
    {/if}

    <td>ver genero</td>

  </tr>

  <tr>
    {foreach from=$generos item=$genero}
    <td>{$genero->genero}</td>
    {if $isUser} 
    <td><a href='deleteGenero/{$genero->id_genero}' type='button' class='btn btn-danger'>Borrar</a></td>
    <td><a href='ShowEditGenero/{$genero->id_genero}' type='button' class='btn btn-danger'>Editar</a></td>
    {/if}
    <td> <button class='btn_discos'><a href='showByGeneros/{$genero->id_genero}'>ver por genero </a></button></td>



  </tr>
    {/foreach}
</table>