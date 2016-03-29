<?php echo Form::model($utilisateur, ['method' => 'PATCH', 'action' => ['UserController@update', $utilisateur->id]]); ?>


<html> Nom </html>
<?php echo Form::text('name');; ?>

<html> <br><br> </html>

<html> Email </html>
<?php echo Form::email('email');; ?>

<html> <br><br> </html>

<html> Type </html>
<?php echo Form::text('type');; ?>

<html> <br><br> </html>

<html>Nouveau Mot De Passe :</html>
<?php echo e(Form::password('password', array('placeholder'=>'new password', 'required'=>'required'))); ?>

<html> <br><br> </html>

<html>Confirmation Du Nouveau Mot De Passe :</html>
<?php echo e(Form::password('password_confirmation', array('placeholder'=>'new password confirmation', 'required'=>'required'))); ?>

<html> <br><br> </html>

 
<?php echo Form::submit('modifier');; ?>



<?php echo Form::close(); ?>

<?php if($errors->any()): ?>
<ul class="alert alert-danger">
<?php foreach($errors->all() as $error): ?>
<li> <?php echo e($error); ?> </li>
<?php endforeach; ?>
</ul>
<?php endif; ?>
