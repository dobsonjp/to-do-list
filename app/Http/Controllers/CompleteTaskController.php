<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompleteTaskRequest;
use App\Models\Task;

class CompleteTaskController extends Controller
{
    public function __invoke(CompleteTaskRequest $request, Task $task)
    {
        try {
            $task->completed = true;
            $task->save();

            return response()->json([
                'status' => 200,
                'message' => 'Task marked as completed.',
                'data' => $task,
            ]);
        } catch (\Exception $e) {
            var_dump($e->getMessage());die;
        }
    }
}
