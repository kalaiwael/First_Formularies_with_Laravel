<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Task List</h2>

    <?php if(session('success')): ?>
        <div class="alert alert-success text-center"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <?php if(count($tasks) > 0): ?>
        <table class="table table-bordered table-striped bg-white shadow-sm">
            <thead class="table-dark text-center">
                <tr>
                    <th>#</th>
                    <th>Task Name</th>
                    <th>Description</th>
                    <th>Assigned To</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($index + 1); ?></td>
                        <td><?php echo e($task['name']); ?></td>
                        <td><?php echo e($task['description']); ?></td>
                        <td><?php echo e($task['assigned_to']); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="text-center">
            <a href="<?php echo e(route('tasks.clear')); ?>" class="btn btn-danger mt-2">Clear All Tasks</a>
        </div>
    <?php else: ?>
        <div class="alert alert-info text-center">No tasks available yet.</div>
    <?php endif; ?>

    <div class="text-center mt-3">
        <a href="<?php echo e(route('tasks.create')); ?>" class="btn btn-primary">Add New Task</a>
    </div>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\framework\ex\resources\views/index.blade.php ENDPATH**/ ?>