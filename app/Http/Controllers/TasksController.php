<?php

namespace App\Http\Controllers;

use App\Http\Requests\TasksRequest;
use App\Models\Task;

class TasksController extends Controller
{
    public function __invoke(TasksRequest $request)
    {
        return response()->json(Task::all());
    }
}
