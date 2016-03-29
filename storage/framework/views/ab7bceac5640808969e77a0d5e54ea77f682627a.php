<?php echo Form::open(array('route' => 'route.name', 'method' => 'POST')); ?>

	<ul>
		<li>
			<?php echo Form::label('email', 'Email:'); ?>

			<?php echo Form::textarea('email'); ?>

		</li>
		<li>
			<?php echo Form::label('password', 'Password:'); ?>

			<?php echo Form::textarea('password'); ?>

		</li>
		<li>
			<?php echo Form::label('num_tel', 'Num_tel:'); ?>

			<?php echo Form::textarea('num_tel'); ?>

		</li>
		<li>
			<?php echo Form::label('adresse', 'Adresse:'); ?>

			<?php echo Form::text('adresse'); ?>

		</li>
		<li>
			<?php echo Form::submit(); ?>

		</li>
	</ul>
<?php echo Form::close(); ?>