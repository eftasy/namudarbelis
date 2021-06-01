<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $tasks = Task::all();
        return view('home', compact('tasks'));
    }

    public function create()
    {
        return view('add-task');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'task' => 'required|unique:tasks|max:255',
            'priority' => 'required',
            'status' => 'required',
            'progress' => 'required'
        ]);
        Task::create([
            'task' => request('task'),
            'priority' => request('priority'),
            'duedate' => request('duedate'),
            'status' => request('status'),
            'progress' => request('progress')
        ]);
        return redirect('/');
    }
}
