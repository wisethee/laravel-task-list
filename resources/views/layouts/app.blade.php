<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 - Task List</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<h1>
    @yield('title')
</h1>

<main>
    @if (session()->has('success'))
        <p>{{session()->get('success')}}</p>
    @endif
    @yield('main')
</main>
</body>
</html>
