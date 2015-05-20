<h2>Agregar Permiso</h2>

<form name="form1" action="" method="post">
    <input type="hidden" name="guardar" value="1" />
    
    <p>
        Permiso: <input type="text" name="permiso" value="{$datos.permiso|default:""}" />
    </p>
    
    <p>
        Llave: <input type="text" name="llave" value="{$datos.llave|default:""}" />
    </p>
    
    <p>
       <input type="submit" value="Guardar" />
    </p>
</form>