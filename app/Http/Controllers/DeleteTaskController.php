<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenericRequest;
use App\Models\Task;

class DeleteTaskController extends Controller
{
    public function __invoke(GenericRequest $request, Task $task)
    {
        $task->delete();

        return redirect('/');
    }
}
