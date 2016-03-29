<?php foreach($mails as $m): ?>
<ul> ID : <?php echo e($m->id); ?> </ul>
<li>Envoyé le : <?php echo e($m->date_mail); ?> à : <?php echo e($m->heure_mail); ?> </li>
<li>Envoyé Par : <?php echo e($m->nom); ?></li>
<li>Sujet : <?php echo e($m->sujet); ?></li>
<li>Contenu : <?php echo e($m->contenu); ?></li>
</ul>
<?php endforeach; ?>