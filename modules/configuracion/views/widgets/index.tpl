{if isset($wids) && count($wids)}


<table>

{foreach key=key item=w from=$wids}
	<tr>
		<td><p><strong>{$w.nombre}</strong></p>
			{if $w.habilitado == 1}
				<a href="{$_layoutParams.root}configuracion/widgets/deshabilitar/{$w.idwidget}">Deshabilitar</a>
			{else}
				<a href="{$_layoutParams.root}configuracion/widgets/habilitar/{$w.idwidget}">Habilitar</a>
			{/if}
		</td>
		<td><p>{$w.descripcion}</p>
			<small>Versión: {$w.version} | Autor: {$w.autor}</small>
		</td>
	</tr>
{/foreach}

</table>

{else}

	<p>No hay Widgets</p>

{/if}


{$paginacion|default:""}