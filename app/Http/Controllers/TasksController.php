<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('index', ['tasks' => $tasks]);
    }

    public function store(Request $request)
    {   
        $task = new Task();
        $task->name = $request->name;
        $task->save();

        if ($request->ajax()) {
            return response()->json(Task::all()->toArray());
        } else {
            return redirect('/');
        }
    }
}
