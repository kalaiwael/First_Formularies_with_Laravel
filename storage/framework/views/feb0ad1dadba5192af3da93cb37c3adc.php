<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>


    <form action="<?php echo e(route('contact.send')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label>Name:</label>
        <input type="text" name="name" required><br><br>


        <button type="submit">Send</button>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\framework\ex\resources\views/contact.blade.php ENDPATH**/ ?>