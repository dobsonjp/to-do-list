<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenericRequest;
use App\Models\Task;

class CompleteTaskController extends Controller
{
    public function __invoke(GenericRequest $request, Task $task)
    {
        $task->completed = true;
        $task->save();

        return response()->json([
            'status' => 200,
            'message' => 'Task marked as completed.',
            'data' => $task,
        ]);
    }
}
