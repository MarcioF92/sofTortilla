{if isset($users) && count($users)}
    <table>
        <tr><td>ID</td>
            <td>Usuario</td>
            <td>Role</td>
            <td>Permisos</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>
        {foreach from=$users item=user}
        <tr>
            <td>{$user->getIduser()}</td>
            <td>{$user->getUser()}</td>
            <td>{$user->getRole()->getName()}</td>
            <td>
                <a href="{$_layoutParams.root}configuracion/usuarios/permisos/{$user->getIduser()}">
                   Permisos
                </a>
            </td>
            <td>
                <a href="{$_layoutParams.root}configuracion/usuarios/edit_user/{$user->getIduser()}">
                   Editar
                </a>
            </td>
            <td>
                <a href="{$_layoutParams.root}configuracion/usuarios/delete_user/{$user->getIduser()}">
                   Eliminar
                </a>
            </td>
        </tr>
            
        {/foreach}
    </table>
{/if}

<a href="{$_layoutParams.root}configuracion/usuarios/add_user">Agregar Usuario</a>