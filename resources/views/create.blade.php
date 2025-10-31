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

    <form action="{{ route('tasks.store') }}" method="POST" class="card p-4 shadow-sm bg-white">
        @csrf
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
                @foreach($members as $member)
                    <option value="{{ $member }}">{{ $member }}</option>
                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-primary w-100">Add Task</button>
    </form>

    <div class="text-center mt-3">
        <a href="{{ route('tasks.index') }}" class="btn btn-link">View Task List</a>
    </div>
</div>

</body>
</html>
