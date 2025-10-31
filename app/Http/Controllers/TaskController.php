<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create()
    {
        $members = ['Wael', 'Sara', 'Omar'];
        return view('create', compact('members')); // ✅ sans "tasks."
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'assigned_to' => 'required',
        ]);

        $tasks = session()->get('tasks', []);

        $tasks[] = [
            'name' => $request->name,
            'description' => $request->description,
            'assigned_to' => $request->assigned_to,
        ];

        session()->put('tasks', $tasks);

        return redirect()->route('tasks.index')->with('success', 'Task added successfully!');
    }

    public function index()
    {
        $tasks = session()->get('tasks', []);
        return view('index', compact('tasks')); // ✅ sans "tasks."
    }

    public function clear()
    {
        session()->forget('tasks');
        return redirect()->route('tasks.index')->with('success', 'All tasks have been cleared.');
    }
}
