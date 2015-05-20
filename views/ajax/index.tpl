<h2>Ejemplo de AJAX gato</h2>

<form>
	País:
	<select id="pais">
		<option value="">Seleccione</option>
		{foreach from=$paises item=p}
			<option value="{$p.idpais}">{$p.nombre}</option>
		{/foreach}
	</select>

	<br>

	Ciudad:
	<select id="ciudad">
	</select>

	<br>

	Ciudad a insertar:
	<input type="text" id="ins_ciudad" />
	<input type="button" value="Insertar" id="btn_insertar" />
</form>