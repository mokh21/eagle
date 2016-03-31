<h1 align="center"> Liste Des Produits </h1>


<?php foreach($produit as $p): ?>
<li>ID : <?php echo e($p->id); ?></li>
<p>prix : <?php echo e($p->prix); ?></p>
<p>surface : <?php echo e($p->surface); ?></p>
<p>type : <?php echo e($p->type); ?></p>
<p>localité : <?php echo e($p->localite); ?></p>
<p>description : <?php echo e($p->description); ?></p>
<p>code_p : <?php echo e($p->code_p); ?></p>
<p>image : <?php echo e($p->image); ?></p>
<p>visite virtuelle : <?php echo e($p->visite_virtuelle); ?></p>
<p>Résidence : <?php echo e($p->residence); ?></p>

<img src='/images/<?php echo e($p->image); ?>'>

<img src="<?php echo e($p->image); ?>" />


<?php echo e(Form::open(['method' => 'GET' , 'action' => ['ProduitsController@show' , $p->id]])); ?>

<input type="submit" value="afficher">
<?php echo e(Form::close()); ?>


<?php echo e(Form::open(['method' => 'GET' , 'action' => ['ProduitsController@edit' , $p->id]])); ?>

<input type="submit" value="modifier">
<?php echo e(Form::close()); ?>


<?php echo e(Form::open(['method' => 'DELETE' , 'action' => ['ProduitsController@destroy' , $p->id]])); ?>

<input type="submit" value="effacer">
<?php echo e(Form::close()); ?>

<?php endforeach; ?>

