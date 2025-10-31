<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage des informations</title>
</head>
<body>
    <h2>Informations saisies :</h2>

    <p><strong>Nom:</strong> <?php echo e($data['nom']); ?></p>
    <p><strong>Prenom:</strong> <?php echo e($data['prenom']); ?></p>
    <p><strong>Age:</strong> <?php echo e($data['age']); ?></p>
    <p><strong>Sexe:</strong> <?php echo e($data['sexe']); ?></p>
    <p><strong>Loisirs:</strong>
        <?php if(isset($data['loisirs'])): ?>
            <?php echo e(implode(', ', $data['loisirs'])); ?>

        <?php else: ?>
            Aucun
        <?php endif; ?>
    </p>

    <a href="<?php echo e(route('info.create')); ?>"> Retour au formulaire</a>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\framework\ex\resources\views/afficheInfo.blade.php ENDPATH**/ ?>