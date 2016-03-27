<form name="form1" action="" method="post">
    <input type="hidden" name="guardar" value="1" />
    
    <p>
        Permiso: <input type="text" name="permiso" value="{if isset($datos)}{$datos->getName()}{/if}" />
    </p>
    
    <p>
        Llave: <input type="text" name="llave" value="{if isset($datos)}{$datos->getPermissionkey()}{/if}" />
    </p>
    
    <p>
       <input type="submit" value="Guardar" />
    </p>
</form>