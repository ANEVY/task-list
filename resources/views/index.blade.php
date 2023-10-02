<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <main>
        <h1>List of tasks</h1>
        <!-- tasks -->
        <div id="task-wrapper">
            @forelse ($tasks as $task)
                <h5>{{$task->title}}</h5>
            @empty
                <p>No task found</p>
            @endforelse
        </div>

    </main>
    @isset($name)
    <h2>Welcome {{$name}}</h2>
    @endisset
</body>
</html>