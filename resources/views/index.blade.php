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
        @if(count($tasks))
            <div id="task-wrapper">
                @foreach($tasks as $task)
                  <h5>{{$task->title}}</h5>
                @endforeach
            </div>
        @else
            <p>
                No tasks found
            </p>
        @endif
    </main>
    @isset($name)
    <h2>Welcome {{$name}}</h2>
    @endisset
</body>
</html>