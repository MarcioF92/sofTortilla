<h2>Administración de Roles</h2>

{if isset($roles) && count($roles)}
<table>
    <tr>
        <th>ID</th>
        <th>Role</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    
    {foreach item=rl from=$roles}
    
        <tr>
            <td>{$rl->getIdrole()}</td>
            <td>{$rl->getName()}</td>
            <td>
                <a href="{$_layoutParams.root}configuracion/acl/permisos_role/{$rl->getIdrole()}">
                    Permisos
                </a>
            </td>
            <td><a href="{$_layoutParams.root}configuracion/acl/editar_role/{$rl->getIdrole()}">Editar</td>
            <td><a href="{$_layoutParams.root}configuracion/acl/eliminar_role/{$rl->getIdrole()}">Eliminar</td>
        </tr>
        
    {/foreach}
    
</table>
{/if}

<p><a href="{$_layoutParams.root}configuracion/acl/nuevo_role">Agregar Role</a></p>