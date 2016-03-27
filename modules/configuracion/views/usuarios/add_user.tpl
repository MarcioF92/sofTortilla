<form action="" method="POST">
	<input type="hidden" name="guardar" value="1" />
	<label for="name">Nombre y apellido: </label> <input name="name" type="text" value="{if isset($datos)}{$datos.name}{/if}" />
	<label for="user">Usuario: </label> <input name="user" type="text" value="{if isset($datos)}{$datos.user}{/if}" />
	<label for="password">Contraseña: </label> <input name="password" type="password" />
	<label for="email">Email: </label> <input name="email" type="text" value="{if isset($datos)}{$datos.email}{/if}" />
	<label for="role">Role: </label>
	<select name="role">
		<option value="-1">Seleccione un role</option>
		{foreach from=$roles item=role}
			<option value="{$role->getIdrole()}">{$role->getName()}</option>
		{/foreach}
	</select>
	<label for="disabled">Enviar email de confirmación</label><input type="checkbox" name="disabled" value="1" /><br>
	<input type="submit" value="Agregar" />
</form>