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
<body>

<img src="{{ asset('img/logo.png') }}" />
<table class="table">
    <tbody>
        <tr>
            <td>
                <div>
{{--                    this wants to be a form--}}
{{--                    <table class="table">--}}
{{--                        <tbody>--}}
{{--                            <tr>--}}
{{--                                <td><input type="text" placeholder="Insert task name"></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td><a href="{{ route('create.task') }}" class="btn btn-primary mb-3">Add</a></td>--}}
{{--                            </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
                    <form method="POST" action="{{ route('create.task') }}">
                        @csrf
                        <input type="text" name="name"
                               id="name" class="form-control"
                               placeholder="Insert task name"
                        >
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </td>
            <td>
                <div class="container mt-5">
                    <table class="table">
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
                                        @if($task->deleted)
                                        <s>
                                        @endif
                                            {{ $task->name }}
                                        @if($task->deleted)
                                        </s>
                                        @endif
                                    </td>
                                    <td>
                                        @if(!$task->completed)
                                            <a href="{{ route('complete.task', $task->id) }}" class="btn btn-secondary">✅</a>
                                        @endif
                                    </td>
                                    <td>
                                        @if(!$task->deleted)
                                            <a href="{{ route('delete.task', $task->id) }}" class="btn btn-secondary">❌</a>
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
</body>
</html>
