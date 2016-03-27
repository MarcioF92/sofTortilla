{if isset($permissions) && count($permissions)}
<table>
    <tr>
        <th>ID</th>
        <th>Permiso</th>
        <th>Llave</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    
    {foreach from=$permissions item=permission}
    
        <tr>
            <td>{$permission->getIdpermission()}</td>
            <td>{$permission->getName()}</td>
            <td>{$permission->getPermissionKey()}</td>
            <td><a href="{$_layoutParams.root}configuracion/acl/editar_permiso/{$permission->getIdpermission()}">Editar</a></td>
            <td><a href="{$_layoutParams.root}configuracion/acl/eliminar_permiso/{$permission->getIdpermission()}">Eliminar</a></td>

        </tr>
        
    {/foreach}
    
</table>
{/if}

<p><a href="{$_layoutParams.root}configuracion/acl/nuevo_permiso">Agregar Permiso</a></p>