<form name="form1" method="post" action="">
	<input type="hidden" value="1" name="enviar" />
	<p>
		<label>Usuario: </label>
		<input type="text" name="usuario" value="{if isset($this->datos)} {$this->datos.usuario} {/if}" />
	</p>

	<p>
		<label>Password: </label>
		<input type="password" name="pass"  />
	</p>

	<p>
		<label></label>
		<input type="submit" value="Enviar" />
	</p>
</form>