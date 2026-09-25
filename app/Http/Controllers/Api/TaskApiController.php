<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreTaskRequest;
use App\Models\Task;
use App\Repositories\TaskRepository;
use Illuminate\Http\Request;

class TaskApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tasks = TaskRepository::getPagination($request->user()->id);

        return response()->json(['tasks' => $tasks]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        $validatedData = $request->validated();

        $validatedData['user_id'] = $request->user()->id;

        $task = TaskRepository::createTask($validatedData);

        return response()->json(['task' => $task]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return ['you'=>'show task'];
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        return ['you'=>'update task'];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        return ['you'=>'destroy task'];
    }
}
