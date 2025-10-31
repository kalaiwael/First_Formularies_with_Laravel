<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>
    <h2>Mon premier formulaire</h2>

    <form action="<?php echo e(route('info.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <label>Nom:</label>
        <input type="text" name="nom" required><br><br>

        <label>Prenom:</label>
        <input type="text" name="prenom" required><br><br>

        <label>Age:</label>
        <input type="number" name="age" required><br><br>

        <label>Sexe:</label>
        <select name="sexe" required>
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
        </select><br><br>

        <label>Loisirs:</label><br>
        <input type="checkbox" name="loisirs[]" value="Sport"> Sport<br>
        <input type="checkbox" name="loisirs[]" value="Musique"> Musique<br>
        <input type="checkbox" name="loisirs[]" value="Lecture"> Lecture<br>
        <input type="checkbox" name="loisirs[]" value="Voyage"> Voyage<br><br>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\framework\ex\resources\views/info.blade.php ENDPATH**/ ?>