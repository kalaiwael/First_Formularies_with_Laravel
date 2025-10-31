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

    @if (session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    @if (count($tasks) > 0)
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
                @foreach($tasks as $index => $task)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $task['name'] }}</td>
                        <td>{{ $task['description'] }}</td>
                        <td>{{ $task['assigned_to'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            <a href="{{ route('tasks.clear') }}" class="btn btn-danger mt-2">Clear All Tasks</a>
        </div>
    @else
        <div class="alert alert-info text-center">No tasks available yet.</div>
    @endif

    <div class="text-center mt-3">
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">Add New Task</a>
    </div>
</div>

</body>
</html>
