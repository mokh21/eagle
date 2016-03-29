<?php foreach($res as $r): ?>
<li>ID Du Résidence : <?php echo e($r->id); ?></li>
<ul>
<li>nom : <?php echo e($r->nom); ?></li>
<li>adresse : <?php echo e($r->adresse); ?></li>
<li>Nombre D'Etage : <?php echo e($r->nb_etage); ?></li>
<li>Visite Virtuelle : <?php echo e($r->visite_virtuelle); ?></li>
<li>Nombre D'appartements : <?php echo e($r->nb_app); ?></li>
</ul>
<?php echo e(Form::open(['method' => 'GET' , 'action' => ['ResidenceController@show' , $r->id]])); ?>

<input type="submit" value="afficher">
<?php echo e(Form::close()); ?>


<?php echo e(Form::open(['method' => 'GET' , 'action' => ['ResidenceController@edit' , $r->id]])); ?>

<input type="submit" value="modifier">
<?php echo e(Form::close()); ?>


<?php echo e(Form::open(['method' => 'DELETE' , 'action' => ['ResidenceController@destroy' , $r->id]])); ?>

<input type="submit" value="effacer">
<?php echo e(Form::close()); ?>

<?php endforeach; ?>