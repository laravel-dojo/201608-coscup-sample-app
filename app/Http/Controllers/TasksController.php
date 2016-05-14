<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'DESC')->get();

        $data = ['tasks' => $tasks];
        
        return view('tasks.index', $data);
    }

    public function store()
    {
    	return redirect('/');
    }

    public function update($task)
    {
    	return redirect('/');
    }

    public function destroy($task)
    {
    	return redirect('/');
    }
}
