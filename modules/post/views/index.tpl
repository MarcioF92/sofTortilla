<h2>Bienvenido Piyo - Posts</h2>

{if isset($posts) && count($posts)}

<table>

{foreach item=datos from=$posts}
	<tr>
		<td>{$datos.idpost}</td>
		<td>{$datos.title}</td>
		<td>{$datos.content}</td>
		<td>
			{if isset($datos.img)}
				<a href="{$_layoutParams.root}public/img/post/{$datos.img}" target="_blank">
					<img src="{$_layoutParams.root}public/img/post/thumb/thumb_{$datos.img}">					
				</a>
			{/if}
		</td>
		<td><a href="{$_layoutParams.root}post/editar/{$datos.idpost}">Editar Post</a></td>
		<td><a href="{$_layoutParams.root}post/eliminar/{$datos.idpost}">Eliminar Post</a></td>
	</tr>
{/foreach}

</table>

{else}

	<p>No hay posts</p>

{/if}


{$paginacion|default:""}

{if $_acl->permission('nuevo_post')}
<a href="{$_layoutParams.root}post/nuevo">Agregar Post</a> <!-- BASE_URL para usar el mismo controlador pero con otra función -->
{/if}

<!--{if Session::accesoViewEstricto(array('usuario'))}-->



<!--{/if}-->

<br>

