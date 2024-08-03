<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenericRequest;
use App\Models\Task;

class TasksController extends Controller
{
    public function __invoke(GenericRequest $request)
    {
        return view('tasks', ['tasks' => Task::all()]);
    }
}
