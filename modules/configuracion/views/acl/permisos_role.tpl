<h2>Gestión de permisos de role</h2>

{if isset($role)}
    <h3>Role: {$role->getName()}</h3>

    <p>Permisos: </p>

    <form name="form1" method="post" action="">
        <input type="hidden" value="1" name="guardar" />
        
        {if isset($permissions)}
        <table>
            <tr>
                <th>Permiso</th>
                <th>Habilitado</th>
            </tr>

            {foreach item=permission from=$permissions}
                <tr>
                    <td>{$permission->getName()}</td>
                    
                    <td>
                        <input type="checkbox" name="permission_{$permission->getIdpermission()}" value="1" {if $permissionsRole->contains($permission)}checked{/if} />
                    </td>
                    
                </tr>

            {/foreach}
        </table>
        {/if}

        <p><input type="submit" value="Guardar" /></p>
    </form>
{else}
    No existe Role
{/if}