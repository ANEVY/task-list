<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel task list app</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    {{--blade-formatter-disable--}}
    <style></style>
    {{--blade-formatter-enable}}


</head>
<body class="container mx-auto mt-10">
    <main>
        <h1>@yield('title')</h1>
        <div>
            @yield('content')
        </div>
    </main>
</body>
</html>