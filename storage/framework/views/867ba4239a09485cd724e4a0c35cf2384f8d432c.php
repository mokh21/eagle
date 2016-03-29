<?php foreach($prds as $p): ?>
<ul> ID : <?php echo e($p->id); ?> </ul>
<li>nom : <?php echo e($p->nom); ?> 
<li>localisation : <?php echo e($p->localisation); ?></li>
<li>nombre d'étage : <?php echo e($p->nb_etage); ?></li>
<li>Contenu : <?php echo e($p->file); ?></li>
</ul>
<?php echo e(Form::open(['method' => 'GET' , 'action' => ['ProductController@show' , $p->id]])); ?>

<input type="submit" value="afficher">
<?php echo e(Form::close()); ?>


<?php echo e(Form::open(['method' => 'GET' , 'action' => ['ProductController@edit' , $p->id]])); ?>

<input type="submit" value="modifier">
<?php echo e(Form::close()); ?>


<?php echo e(Form::open(['method' => 'DELETE' , 'action' => ['ProductController@destroy' , $p->id]])); ?>

<input type="submit" value="effacer">
<?php echo e(Form::close()); ?>


<?php echo e(Form::open(['method' => 'GET' , 'action' => ['SproductController@create' , $p->nom ]])); ?>

<input type="submit" value="Ajouter Un Sous-Produit">
<?php echo e(Form::close()); ?>

<?php endforeach; ?>