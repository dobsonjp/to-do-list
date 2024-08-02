<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Models\Task;

class CreateTaskController extends Controller
{
    public function __invoke(CreateTaskRequest $request)
    {
        $task = Task::create($request->input());

        return response()->json([
            'status' => 200,
            'message' => 'Task created.',
            'data' => $task,
        ]);
    }
}
