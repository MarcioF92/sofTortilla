<form name="form1" action="" method="post">
    <input type="hidden" name="guardar" value="1" />
    <p>
        Role: <input type="text" name="name" value="{if isset($role)}{$role->getName()}{/if}" />
    </p>
    
    <p>
       <input type="submit" value="Editar" />
    </p>
</form>