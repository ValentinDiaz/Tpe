{include file="templetes/header.tpl"}

<h1>discos</h1>

<div class="container"></div>

{include file="templetes/addDisco.tpl"}

    <div  class="discos">
        {foreach from=$discos item=$disco}
            <div class="disco">
                <ul>
                    <div class="datos_container">
                        <li class="datos_dico">{$disco->titulo}</li>
                        <li class="datos_dico">{$disco->artista}</li>
                        <li class="datos_dico">{$disco->anio}</li>
                        <li class="datos_dico">{$disco->genero}</li>
                    </div>
                    <div class="button_container">
                    {if $isUser}
                        <li><button class='btn_discos'><a href='delete/{$disco->id}' >Borrar</a></button></li>
                        <li><button class='btn_discos'><a href='showEdit/{$disco->id}'>editar</a></button></li>
                        <li><button class='btn_discos'><a href='showMore/{$disco->id}'>ver mas</a></button></li>
                        <li><button class='btn_discos'><a href='showByGeneros/{$disco->id_genero}'>ver por genero </a></button></li>
                    {/if}
                    </div>
                </ul>
            </div>
        {/foreach}
    </div>    

</div>
{include file="templetes/footer.tpl"}