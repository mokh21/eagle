<?php echo Form::model($adms, ['method' => 'PATCH', 'action' => ['AdminsController@update', $adms->id]]); ?>

<ul>
	    <li>
			<?php echo Form::label('nom', 'Nom:'); ?>

			<?php echo Form::textarea('nom'); ?>

		</li>
		<li>
			<?php echo Form::label('email', 'Email:'); ?>

			<?php echo Form::text('email'); ?>

		</li>
		<li>
			<?php echo Form::label('password', 'Password:'); ?>

			<?php echo Form::password('password'); ?>

		</li>
		<li>
			<?php echo Form::label('num_tel', 'Num_tel:'); ?>

			<?php echo Form::text('num_tel'); ?>

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

<?php if($errors->any()): ?>
<ul class="alert alert-danger">
<?php foreach($errors->all() as $error): ?>
<li> <?php echo e($error); ?> </li>
<?php endforeach; ?>
</ul>
<?php endif; ?>
