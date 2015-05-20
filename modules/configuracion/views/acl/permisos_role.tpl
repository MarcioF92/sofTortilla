<h2>Gestión de permisos de role</h2>

<h3>Role: {$roles.role}</h3>

<p>Permisos: </p>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar" />
    
    {if isset($permisos) && count($permisos)}
    <table>
        <tr>
            <th>Permiso</th>
            <th>Habilitado</th>
            <th>Denegado</th>
            <th>Ignorar</th>
        </tr>

        {foreach item=pr from=$permisos}

            <tr>
                <td>{$pr.nombre}</td>
                <td><input type="radio" name="perm_{$pr.idpermiso}" value="1" {if ($pr.valor == 1)}checked="checked" {/if}/></td>
                <td><input type="radio" name="perm_{$pr.idpermiso}" value="0" {if $pr.valor == ""}checked="checked" {/if}></td>
                <td><input type="radio" name="perm_{$pr.idpermiso}" value="x" {if $pr.valor === "x"}checked="checked" {/if}></td>
            </tr>

        {/foreach}
    </table>
    {/if}

    <p><input type="submit" value="Guardar" /></p>
</form>