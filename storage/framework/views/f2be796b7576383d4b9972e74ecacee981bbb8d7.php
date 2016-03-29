<?php foreach($adms as $a): ?>
<li>ID : <?php echo e($a->id); ?></li>
<ul>
<li>Nom : <?php echo e($a->nom); ?></li>
<li>email : <?php echo e($a->email); ?></li>
<li>Numéro De l'admin : <?php echo e($a->num_tel); ?></li>
<li>Adresse De l'admin : <?php echo e($a->adresse); ?></li>
</ul>
<?php echo e(Form::open(['method' => 'GET' , 'action' => ['AdminsController@show' , $a->id]])); ?>

<input type="submit" value="afficher">
<?php echo e(Form::close()); ?>


<?php echo e(Form::open(['method' => 'GET' , 'action' => ['AdminsController@edit' , $a->id]])); ?>

<input type="submit" value="modifier">
<?php echo e(Form::close()); ?>


<?php echo e(Form::open(['method' => 'DELETE' , 'action' => ['AdminsController@destroy' , $a->id]])); ?>

<input type="submit" value="effacer">
<?php echo e(Form::close()); ?>

<?php endforeach; ?>