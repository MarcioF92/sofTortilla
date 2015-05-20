<h2>Administración de Roles</h2>

{if isset($roles) && count($roles)}
<table>
    <tr>
        <th>ID</th>
        <th>Role</th>
        <th></th>
        <th></th>
    </tr>
    
    {foreach item=rl from=$roles}
    
        <tr>
            <td>{$rl.idrole}</td>
            <td>{$rl.role}</td>
            <td>
                <a href="{$_layoutParams.root}configuracion/acl/permisos_role/{$rl.idrole}">
                    Permisos
                </a>
            </td>
            <td><a href="{$_layoutParams.root}configuracion/acl/editar_role/{$rl.idrole}">Editar</td>
        </tr>
        
    {/foreach}
    
</table>
{/if}

<p><a href="{$_layoutParams.root}configuracion/acl/nuevo_role">Agregar Role</a></p>