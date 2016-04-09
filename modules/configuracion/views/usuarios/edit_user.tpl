<form action="" method="POST">
	<input type="hidden" name="guardar" value="1" />
	<label for="name">Nombre y apellido: </label> <input name="name" type="text" value="{if isset($user)}{if isset($datos)}{$datos.name}{else}{$user->getName()}{/if}{/if}" />
	<label for="user">Usuario: </label> <input name="user" type="text" value="{if isset($user)}{if isset($datos)}{$datos.user}{else}{$user->getUser()}{/if}{/if}" />
	<label for="email">Email: </label> <input name="email" type="text" value="{if isset($user)}{if isset($datos)}{$datos.email}{else}{$user->getEmail()}{/if}{/if}" />
	<label for="role">Role: </label>
	<select id="role" name="role">
		<option value="-1">Seleccione un role</option>
		{foreach from=$roles item=role}
			<option value="{$role->getIdrole()}">{$role->getName()}</option>
		{/foreach}
	</select>
	<input type="submit" value="Editar" />
</form>
<script type="text/javascript">
$(document).ready(function(){
	$("#role").val("{$user->getRole()->getIdrole()}");
});
</script>