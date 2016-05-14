<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = [];
        
        for($i = 0; $i < 10; $i++) {
            $task = new \stdClass();
            $task->name = 'task '.($i+1);
            $tasks[] = $task;
        }

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
