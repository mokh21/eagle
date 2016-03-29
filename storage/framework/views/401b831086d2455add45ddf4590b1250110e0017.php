<?php echo Form::open(array('url' => 'product')); ?>

	<ul>
		<li>
			<?php echo Form::label('nom', 'Nom:'); ?>

			<?php echo Form::text('nom'); ?>

		</li>
		<li>
			<?php echo Form::label('localisation', 'Localisation:'); ?>

			<?php echo Form::text('localisation'); ?>

		</li>
		<li>
			<?php echo Form::label('nb_etage', 'Nb_etage:'); ?>

			<?php echo Form::text('nb_etage'); ?>

		</li>
		<li>
			<?php echo Form::label('image', 'Image:'); ?>

			<?php echo Form::file('image'); ?>

		</li>
		<li>
			<?php echo Form::submit(); ?>

		</li>
	</ul>
<?php echo Form::close(); ?>