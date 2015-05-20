<?php if (isset($this->_paginacion)): ?>

	<?php if ($this->_paginacion['primero']): ?>

		<a class="pagina" pagina="<?php echo $this->_paginacion['primero']; ?>" href="javascript:void(0)">Primero</a>

	<?php else: ?>

		<span class="disabled">Primero</span>

	<?php endif; ?>

	&nbsp; - &nbsp;

	<?php if ($this->_paginacion['anterior']): ?>

		<a class="pagina" pagina="<?php echo $this->_paginacion['anterior']; ?>" href="javascript:void(0)">Anterior</a>

	<?php else: ?>

		<span class="disabled">Anterior</span>

	<?php endif; ?>

	&nbsp; - &nbsp;

	<?php for($i = 0; $i < count($this->_paginacion['rango']); $i++): ?>

		<?php if ($this->_paginacion['actual'] == $this->_paginacion['rango'][$i]): ?>

			<?php echo $this->_paginacion['rango'][$i]; ?>

		<?php else: ?>

			<a class="pagina" pagina="<?php echo $this->_paginacion['rango'][$i]; ?>" href="javascript:void(0)"><?php echo $this->_paginacion['rango'][$i]; ?></a>

		<?php endif; ?>

	<?php endfor; ?>

	&nbsp; - &nbsp;

	<?php if ($this->_paginacion['siguiente']): ?>

		<a class="pagina" pagina="<?php echo $this->_paginacion['siguiente']; ?>" href="javascript:void(0)">siguiente</a>

	<?php else: ?>

		Siguiente

	<?php endif; ?>

	&nbsp; - &nbsp;

	<?php if ($this->_paginacion['ultimo']): ?>

		<a class="pagina" pagina="<?php echo $this->_paginacion['ultimo']; ?>" href="javascript:void(0)">ultimo</a>

	<?php else: ?>

		<span class="disabled">Último</span>

	<?php endif; ?>

	<div style="text-align: center;">
		<p><small>Página: <?php echo $this->_paginacion['actual']; ?> de <?php echo $this->_paginacion['total']; ?></small><br>
			Registros por páginas
			<select name="registros" id="registros">
				<?php for ($i=10; $i <= 100; $i+=10) { 
					?>
					<option value="<?php echo $i; ?>" <?php if ($i == $this->_paginacion['limite']) {echo "selected=selected";}?>><?php echo $i; ?></option>
					<?php
				} ?>
			</select>

<?php endif; ?>