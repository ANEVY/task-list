<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Hello Blade template</h1>
    @isset($name)
    <h2>Welcome {{$name}}</h2>
    @endisset
</body>
</html>