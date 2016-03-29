

<?php echo Form::open(array('url' => 'produits')); ?>


<html> Prix </html>
<?php echo Form::number('prix', 'value');; ?>

<html> <br><br> </html>

<html> Surface </html>
<?php echo Form::number('surface', 'value');; ?>

<html> <br><br> </html>

<html> Type </html>
<?php echo Form::select('type', array('s+1' => 's+1', 's+2' => 's+2', 's+3' => 's+3', 's+4' => 's+4', 'Bureau Commercial' => 'Bureau Commercial' ));; ?>

<html> <br><br> </html>

<html> Localité </html>
<?php echo Form::text('localite');; ?>

<html> <br><br> </html>

<html> Description </html>
<?php echo Form::text('description');; ?>

<html> <br><br> </html>

<html> Code du Produit </html>
<?php echo Form::text('code_p');; ?>

<html> <br><br> </html>

<html> Url De L'image </html>
<?php echo Form::file('image');; ?>

<html> <br><br> </html>

<html> Url Du Visite Virtuelle </html>
<?php echo Form::text('visite_virtuelle');; ?>

<html> <br><br> </html>

<html> Résidence : </html>

<?php echo e(Form::select('category', $n)); ?>







<?php echo Form::submit('Envoyer');; ?>



<?php echo Form::close(); ?>


<?php if($errors->any()): ?>
<ul class="alert alert-danger">
<?php foreach($errors->all() as $error): ?>
<li> <?php echo e($error); ?> </li>
<?php endforeach; ?>
</ul>
<?php endif; ?>

 

