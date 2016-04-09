<table>
{foreach from=$widgetList item=widget}

	<tr>
		<td><p><strong>{$widget.information.name}</strong></p>
			{if $widget.activated}
				<a href="{$_layoutParams.root}configuracion/widgets/disactivate/{$widget.directory}/">Deshabilitar</a>
			{else}
				<a href="{$_layoutParams.root}configuracion/widgets/activate/{$widget.directory}">Habilitar</a>
			{/if}
		</td>
		<td><p>{$widget.information.description}</p>
			<small>Versión: {$widget.information.version} | Autor: {$widget.information.author}</small>
		</td>
	</tr>
{/foreach}

</table>