<form id="form1" method="post" action="" enctype="multipart/form-data">

	<input name="guardar" type="hidden" value="1" />
	<p>Título: <br>
	<input type="text" name="titulo" value="{if isset($datos.title)} {$datos.title} {/if}" /></p>

	<p>Cuerpo: <br>
	<textarea type="text" name="cuerpo">{if isset($datos.content)} {$datos.content} {/if} </textarea></p>

	<input type="file" name="imagen" />

	<input type="submit" value="Guardar" />
</form>