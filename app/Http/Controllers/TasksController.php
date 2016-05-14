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

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        
        Task::create($request->all());
        
    	return redirect('/');
    }

    public function update(Task $task)
    {
        $task->done = true;
        $task->save();
        
    	return redirect('/');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        
    	return redirect('/');
    }
}
