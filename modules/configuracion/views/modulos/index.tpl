<h2>Módulos</h2>

{if isset($modulos) && count($modulos)}

<table>

{foreach item=modulo from=$modulos}
	<tr>
		<td><p><strong>{$modulo.nombre}</strong></p>
			{if $modulo.habilitado == 1}
				<a href="{$_layoutParams.root}configuracion/modulos/deshabilitar/{$modulo.idmodulo}">Deshabilitar</a>
			{else}
				<a href="{$_layoutParams.root}configuracion/modulos/habilitar/{$modulo.idmodulo}">Habilitar</a>
			{/if}
		</td>
		<td><p>{$modulo.descripcion}</p>
			<small>Versión: {$modulo.version} | Autor: {$modulo.autor}</small>
		</td>
	</tr>
{/foreach}

</table>

{else}

	<p>No hay módulos</p>

{/if}


{$paginacion|default:""}