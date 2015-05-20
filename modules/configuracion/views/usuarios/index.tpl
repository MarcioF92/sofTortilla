<h2>Usuarios</h2>

{if isset($usuarios) && count($usuarios)}
    <table>
        <tr><td>ID</td>
            <td>Usuario</td>
            <td>Role</td>
            <td></td>
        </tr>
        {foreach from=$usuarios item=us}
        <tr>
            <td>{$us.idusuario}</td>
            <td>{$us.usuario}</td>
            <td>{$us.role}</td>
            <td>
                <a href="{$_layoutParams.root}configuracion/usuarios/permisos/{$us.idusuario}">
                   Permisos
                </a>
            </td>
        </tr>
            
        {/foreach}
    </table>
{/if}