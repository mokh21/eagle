<?php foreach($cmds as $c): ?>
<ul>ID : <?php echo e($c->id); ?></ul>
<li>ID Du Client : <?php echo e($c->id_client); ?></li>
<li>code_type : <?php echo e($c->code_type); ?></li>
<li>Dossier: <?php echo e($c->dossier); ?></li>
<?php echo e(Form::open(['method' => 'GET' , 'action' => ['CommandesController@show' , $c->id]])); ?>

<input type="submit" value="afficher">
<?php echo e(Form::close()); ?>


<?php echo e(Form::open(['method' => 'GET' , 'action' => ['CommandesController@edit' , $c->id]])); ?>

<input type="submit" value="modifier">
<?php echo e(Form::close()); ?>


<?php echo e(Form::open(['method' => 'DELETE' , 'action' => ['CommandesController@destroy' , $c->id]])); ?>

<input type="submit" value="effacer">
<?php echo e(Form::close()); ?>

<?php endforeach; ?>
