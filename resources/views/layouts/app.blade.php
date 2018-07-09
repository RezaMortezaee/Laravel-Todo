<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>Todo</title>
</head>

<body>
    @include('inc.navbar')

    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>

    @include('layouts.footer')

</body>
</html>