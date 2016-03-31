<?php echo Form::open(array('url' => 'rdv')); ?>

	<ul>
		<li>
			<?php echo Form::label('id_client', 'Id_client:'); ?>

			<?php echo Form::text('id_client'); ?>

		</li>
		<br>
		<li>
			<?php echo Form::label('nom_client', 'Nom_client:'); ?>

			<?php echo Form::text('nom_client'); ?>

		</li>
		<br>
		<li>
			<?php echo Form::label('email_client', 'Email_client:'); ?>

			<?php echo Form::email('email_client'); ?>

		</li>
		<br>
		<li>
			<?php echo Form::label('num_client', 'Num_client:'); ?>

			<?php echo Form::text('num_client'); ?>

		</li>
		<br>
		<li>
			<?php echo Form::label('date_rdv', 'Date_rdv:'); ?>

			<?php echo Form::text('date_rdv'); ?> 
		</li>
		
		<br>
		<li>
			<?php echo Form::label('heure_rdv', 'Heure_rdv:'); ?>

			<?php echo Form::text('heure_rdv'); ?>

		</li>
		<br>
		<li>
			<?php echo Form::submit(); ?>

		</li>
	</ul>
<?php echo Form::close(); ?>



<?php if($errors->any()): ?>
<ul class="alert alert-danger">
<?php foreach($errors->all() as $error): ?>
<li> <?php echo e($error); ?> </li>
<?php endforeach; ?>
</ul>
<?php endif; ?>