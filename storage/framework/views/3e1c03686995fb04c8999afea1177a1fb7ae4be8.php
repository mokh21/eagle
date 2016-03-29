<?php echo Form::open(array('url' => 'mail')); ?>


	<ul>
		<li>
			<?php echo Form::label('nom', 'Nom:'); ?>

			<?php echo Form::text('nom'); ?>

		</li>
		<li>
			<?php echo Form::label('sujet', 'Sujet:'); ?>

			<?php echo Form::text('sujet'); ?>

		</li>
		<li>
			<?php echo Form::label('contenu', 'Contenu:'); ?>

			<?php echo Form::textarea('contenu'); ?>

		</li>
		
			<?php echo Form::submit(); ?>

		</li>
	</ul>
<?php echo Form::close(); ?>