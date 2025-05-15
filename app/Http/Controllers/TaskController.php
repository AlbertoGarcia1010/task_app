<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskModel;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    use \Illuminate\Foundation\Validation\ValidatesRequests;
    public function index()
    {
        $tasks = TaskModel::paginate(10);
        return view('task.index', compact('tasks'));
    }

    public function create()
    {
        Log::info('View Create');

        return view('task.create');
    }
    public function save(Request $request){
        Log::info('Request data: ', $request->all());
        
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:255',
            'priority' => 'required|string|min:1|max:3',
        ]);
        $task = new TaskModel();
        $task->name = request('name');
        $task->description = request('description');
        $task->priority = request()->integer('priority');
        $task->status = 1;
        $task->save();
        

        return redirect('/task');
    }

    public function edit($id)
    {
        $task = TaskModel::find($id);
        Log::info('Task to edit: ', $task->toArray());
        return view('task.edit', ['task' => $task]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:255',
            'priority' => 'required|string|min:1|max:3',
        ]);
        $task = TaskModel::find($id);
        $task->name = request('name');
        $task->description = request('description');
        $task->priority = request()->integer('priority');
        $task->status = 1;
        $task->update();

        return redirect('/task');
    }

    public function delete($id)
    {
        $task = TaskModel::find($id);
        $task->delete();
        return redirect('/task');
    }
    public function detail($id)
    {
        $task = TaskModel::find($id);
        return view('task.detail', ['task' => $task]);
    }
    public function getAllTasks()
    {
        $tasks = TaskModel::all();
        return response()->json($tasks);
    }
}
