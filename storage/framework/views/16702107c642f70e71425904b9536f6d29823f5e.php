<h1 align="center"> Liste Des Rendez-Vous </h1>


 
<?php foreach($rdvs as $r): ?>
<li>ID Du Client : <?php echo e($r->id_client); ?></li>
<ul>
<li>client : <?php echo e($r->nom_client); ?></li>
<li>email : <?php echo e($r->email_client); ?></li>
<li>Numéro Du Client : <?php echo e($r->num_client); ?></li>
<li>Date Du Rendez_Vous : <?php echo e($r->date_rdv); ?></li>
<li>Heure Du Rendez_Vous : <?php echo e($r->description); ?></li>
</ul>
<?php echo e(Form::open(['method' => 'GET' , 'action' => ['RdvController@show' , $r->id]])); ?>

<input type="submit" value="afficher">
<?php echo e(Form::close()); ?>


<?php echo e(Form::open(['method' => 'GET' , 'action' => ['RdvController@edit' , $r->id]])); ?>

<input type="submit" value="modifier">
<?php echo e(Form::close()); ?>


<?php echo e(Form::open(['method' => 'DELETE' , 'action' => ['RdvController@destroy' , $r->id]])); ?>

<input type="submit" value="effacer">
<?php echo e(Form::close()); ?>

<?php endforeach; ?>

