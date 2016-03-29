<?php echo Form::open(array('url' => 'utilisateurs')); ?>


<html> Nom </html>
<?php echo Form::text('name');; ?>

<html> <br><br> </html>

<html> Email </html>
<?php echo Form::email('email');; ?>

<html> <br><br> </html>

<html>Nouveau Mot De Passe :</html>
<?php echo e(Form::password('password', array('placeholder'=>'password', 'required'=>'required'))); ?>

<html> <br><br> </html>

<html>Confirmation Du Nouveau Mot De Passe :</html>
<?php echo e(Form::password('password_confirmation', array('placeholder'=>'password confirmation', 'required'=>'required'))); ?>

<html> <br><br> </html>

<?php echo Form::selectMonth('month');; ?>

 
<?php echo Form::submit('inscription');; ?>



<?php echo Form::close(); ?>

<?php if($errors->any()): ?>
<ul class="alert alert-danger">
<?php foreach($errors->all() as $error): ?>
<li> <?php echo e($error); ?> </li>
<?php endforeach; ?>
</ul>
<?php endif; ?>
