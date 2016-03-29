<?php echo Form::model($res, ['method' => 'PATCH', 'action' => ['ResidenceController@update', $res->id]]); ?>


	<ul>
		<li>
			<?php echo Form::label('nom', 'Nom:'); ?>

			<?php echo Form::text('nom'); ?>

		</li>
		<li>
			<?php echo Form::label('adresse', 'Adresse:'); ?>

			<?php echo Form::text('adresse'); ?>

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
			<?php echo Form::label('visite_virtuelle', 'Visite_virtuelle:'); ?>

			<?php echo Form::text('visite_virtuelle'); ?>

		</li>
		<li>
			<?php echo Form::label('nb_app', 'Nb_app:'); ?>

			<?php echo Form::text('nb_app'); ?>

		</li>
		<li>
			<?php echo Form::submit(); ?>

		</li>
	</ul>
<?php echo Form::close(); ?>