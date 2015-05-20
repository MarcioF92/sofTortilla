<h2>Registro</h2>
<form name="form1" method="post" action="">
	<input type="hidden" value="1" name="enviar" />

	<p>
		<label>Nombre: </label>
		<input type="text" name="nombre" value="{if isset($atos)} {$datos.nombre} {/if}" />
	</p>

	<p>
		<label>Usuario: </label>
		<input type="text" name="usuario" value="{if isset($atos)} {$datos.usuario} {/if}" />
	</p>

	<p>
		<label>Password: </label>
		<input type="password" name="pass"  />
	</p>

	<p>
		<label>Confirmar: </label>
		<input type="password" name="confirmar"  />
	</p>

	<p>
		<label>Email: </label>
		<input type="text" name="email" value="{if isset($atos)} {$datos.email} {/if}" />
	</p>

	<p>
		<label></label>
		<input type="submit" value="Enviar" />
	</p>
</form>