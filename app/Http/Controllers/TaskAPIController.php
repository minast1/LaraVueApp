<?php

namespace App\Http\Controllers;

use App\Task;
 
class TaskAPIController extends Controller
{
    public function index()
    {
        return Task::all();
    }
 
    public function show($id)
    {
        return Task::with(['category', 'user'])->find($id);
    }

    public function store(Request $request)
    {
        return Task::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());

        return $task;
    }

    public function delete(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
