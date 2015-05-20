<h2>Prueba</h2>

<div class="well well-small">
    <form id="form1" class="form-inline">
        Nombre: <input type="text" name="nombre" id="nombre">
        <button type="button" id="btnEnviar" class="btn"><i class="icon-search">Buscar</i></button>
        
        <br><br>
        
        <select name="pais" id="pais"><option value="x"> - seleccione pais - </option>
            {foreach from=$paises item=ps}
                <option value="{$ps.idpais}">{$ps.nombre}</option>
            {/foreach}
        </select>
        <select name="ciudad" id="ciudad"><option value=""> - seleccione ciudad - </option></select>
    </form>
</div>

<div id="lista_registros">
    {if isset($posts) && count($posts)}
        <table class="table table-bordered table-condensed table-striped">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Pais</th>
                <th>Ciudad</th>
            </tr>

            {foreach item=datos from=$posts}
                <tr>
                    <td>{$datos.idpost}</td>
                    <td>{$datos.titulo}</td>
                    <td>{$datos.pais}</td>
                    <td>{$datos.ciudad}</td>
                </tr>
            {/foreach}
        </table>
    {else}

        <p><strong>No hay posts!</strong></p>

    {/if}

    {$paginacion|default:""}

</div>

