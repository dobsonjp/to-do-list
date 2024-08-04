<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MLP To-Do</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
</head>
<body style="background-color:#e8e8e8">

<img src="{{ asset('img/logo.png') }}" style="padding:25px"/>
<table class="table">
    <tbody>
        <tr>
            <td>
                <div>
                    <form method="POST" action="{{ route('create.task') }}" style="padding: 10px">
                        @csrf
                        <input type="text" name="name"
                               id="name" class="form-control"
                               placeholder="Insert task name"
                        >
                        <button style="width:100%" type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </td>
            <td>
                <div class="container mt-5">
                    <table class="table" style="border: thin solid darkgrey;border-radius: 10px">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th colspan="3">Task</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($tasks as $task)
                                <tr>
                                    <td>{{ $task->id }}</td>
                                    <td>
                                        @if($task->completed)
                                        <s>
                                        @endif
                                            {{ $task->name }}
                                        @if($task->completed)
                                        </s>
                                        @endif
                                    </td>
                                    <td>
                                        @if(!$task->completed)
                                            <form method="POST" action="{{ route('complete.task', $task->id) }}">
                                                <input type="submit" value="✅">
                                            </form>
                                        @endif
                                    </td>
                                    <td>
                                        @if(!$task->completed)
                                            <form method="POST" action="{{ route('delete.task', $task->id) }}">
                                                <input type="submit" value="❌">
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No tasks found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<p style="text-align:center;font-size:x-small">Copyright © 2020 All Right Reserved</p>
</body>
</html>
