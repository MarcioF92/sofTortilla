<?php if (isset($this->_paginacion)): ?>

	<?php if ($this->_paginacion['primero']): ?>

		<a href="<?php echo $link . $this->_paginacion['primero']; ?>">primero</a>

	<?php else: ?>

		Primero

	<?php endif; ?>

	&nbsp; - &nbsp;

	<?php if ($this->_paginacion['anterior']): ?>

		<a href="<?php echo $link . $this->_paginacion['anterior']; ?>">anterior</a>

	<?php else: ?>

		Anterior

	<?php endif; ?>

	&nbsp; - &nbsp;

	<?php for($i = 0; $i < count($this->_paginacion['rango']); $i++): ?>

		<?php if ($this->_paginacion['actual'] == $this->_paginacion['rango'][$i]): ?>

			<?php echo $this->_paginacion['rango'][$i]; ?>

		<?php else: ?>

			<a href="<?php echo $this->_paginacion['rango'][$i]; ?>"><?php echo $this->_paginacion['rango'][$i]; ?></a>

		<?php endif; ?>

	<?php endfor; ?>

	&nbsp; - &nbsp;

	<?php if ($this->_paginacion['siguiente']): ?>

		<a href="<?php echo $link . $this->_paginacion['siguiente']; ?>">siguiente</a>

	<?php else: ?>

		Siguiente

	<?php endif; ?>

	&nbsp; - &nbsp;

	<?php if ($this->_paginacion['ultimo']): ?>

		<a href="<?php echo $link . $this->_paginacion['ultimo']; ?>">ultimo</a>

	<?php else: ?>

		ultimo

	<?php endif; ?>

<?php endif; ?>