{if isset($permission)}
	¿Estás seguro que quieres eliminar el Permiso {$permission->getName()}?
	<form action="" method="POST">
		<input name="aceptar" type="hidden" value="1">
		<input type="submit" value="Aceptar">
	</form>
	<form action="" method="POST">
		<input name="cancelar" type="hidden" value="1">
		<input type="submit" value="Cancelar">
	</form>
{else}
	No existe Permiso
{/if}