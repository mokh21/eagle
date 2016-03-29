<?php echo Form::open(array('url' => 'sproduct')); ?>	<ul>
		<li>
			<?php echo Form::label('id_produit', 'Id_produit:'); ?>

			<?php echo Form::text('id_produit'); ?>

		</li>
		
		<li>
			<?php echo Form::label('type', 'Type:'); ?>

			<?php echo Form::text('type'); ?>

		</li>
		<li>
			<?php echo Form::label('code', 'Code:'); ?>

			<?php echo Form::text('code'); ?>

		</li>
		<li>
			<?php echo Form::label('prix', 'Prix:'); ?>

			<?php echo Form::text('prix'); ?>

		</li>
		<li>
			<?php echo Form::label('surface', 'Surface:'); ?>

			<?php echo Form::text('surface'); ?>

		</li>
		<li>
			<?php echo Form::label('chambres', 'Chambres:'); ?>

			<?php echo Form::text('chambres'); ?>

		</li>
		<li>
			<?php echo Form::label('description', 'Description:'); ?>

			<?php echo Form::text('description'); ?>

		</li>
		<li>
			<?php echo Form::submit(); ?>

		</li>
	</ul>
<?php echo Form::close(); ?>