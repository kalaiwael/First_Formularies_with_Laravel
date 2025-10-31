<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Add a New Task</h2>

    <form action="<?php echo e(route('tasks.store')); ?>" method="POST" class="card p-4 shadow-sm bg-white">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label class="form-label">Task Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter task name" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" placeholder="Enter description" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Assigned To</label>
            <select name="assigned_to" class="form-select" required>
                <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($member); ?>"><?php echo e($member); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>


        <button type="submit" class="btn btn-primary w-100">Add Task</button>
    </form>

    <div class="text-center mt-3">
        <a href="<?php echo e(route('tasks.index')); ?>" class="btn btn-link">View Task List</a>
    </div>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\framework\ex\resources\views/create.blade.php ENDPATH**/ ?>