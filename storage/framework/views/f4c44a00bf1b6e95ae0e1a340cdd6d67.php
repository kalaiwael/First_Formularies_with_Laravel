<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>


    <form action="<?php echo e(route('contact.send')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <h2>Nom :<?php echo e(request('name')); ?> </h2>
        <h2>prenom :<?php echo e(request('name')); ?> </h2>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\framework\ex\resources\views/affiche.blade.php ENDPATH**/ ?>