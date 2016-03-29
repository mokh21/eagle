<?php foreach($utilisateur as $u): ?>
<li> id : <?php echo e($u->id); ?> </li>
<p>nom : <?php echo e($u->name); ?></p>
<p>email : <?php echo e($u->email); ?></p>
<p>type : <?php echo e($u->type); ?></p>
<?php echo e(Form::open(['method' => 'GET' , 'action' => ['UserController@show' , $u->id]])); ?>

<input type="submit" value="afficher">
<?php echo e(Form::close()); ?>


<?php echo e(Form::open(['method' => 'GET' , 'action' => ['UserController@edit' , $u->id]])); ?>

<input type="submit" value="modifier">
<?php echo e(Form::close()); ?>


<?php echo e(Form::open(['method' => 'GET' , 'action' => ['UserController@destroy' , $u->id]])); ?>

<input type="submit" value="supprimer">
<?php echo e(Form::close()); ?>



<?php endforeach; ?>


