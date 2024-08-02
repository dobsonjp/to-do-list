<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteTaskRequest;
use App\Models\Task;

class DeleteTaskController extends Controller
{
    public function __invoke(DeleteTaskRequest $request, Task $task)
    {
        $task->deleted = true;
        $task->save();

        return response()->json([
            'status' => 200,
            'message' => 'Task deleted successfully',
            'data' => $task,
        ]);
    }
}
