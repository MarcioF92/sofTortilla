<h3>Usuario: {$user->getUser()}<br />Role:{$user->getRole()->getName()}</h3>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar">
    {if isset($permissions) && count($permissions)}
    <table>
        <tr>
            <td>Permiso</td>
            <td></td>
        </tr>
        {foreach from=$permissions item=permission}
        <tr>
            <td>{$permission->getName()}</td>
            <td>
                {if $user->getRole()->getPermissions()->contains($permission)}
                    Habilitado por Role
                    <input type="hidden" name="perm_{$permission->getIdpermission()}" value="-1" />
                {else}
                    <select name="perm_{$permission->getIdpermission()}">
                        <option value="1" {if $user->getPermissions()->contains($permission)}selected="selected"{/if}>Habilitado</option>
                        <option value="0" {if !$user->getPermissions()->contains($permission)}selected="selected"{/if}>Denegado</option>
                    </select>
                {/if}
            </td>
        </tr>
            
        {/foreach}
    </table>
        <p><input type="submit" value="Guardar" /></p>
{/if}
</form>