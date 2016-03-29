<?php echo Form::open(array('url' => 'commandes')); ?>

	<ul>
		<li>
			<?php echo Form::label('id_client', 'Id_client:'); ?>

			<?php echo Form::text('id_client'); ?>

		</li>
		<li>
			<?php echo Form::label('code_type', 'Code_type:'); ?>

			<?php echo Form::text('code_type'); ?>

		</li>
		<li>
			<?php echo Form::label('dossier', 'Dossier:'); ?>

			<?php echo Form::text('dossier'); ?>

		</li>
		<li>
			<?php echo Form::submit(); ?>

		</li>
	</ul>
<?php echo Form::close(); ?>