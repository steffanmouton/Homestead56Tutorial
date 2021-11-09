<!DOCTYPE html>

<html>

<head>
    <title>@yield('title', 'Unnamed Homestead Page')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>

<body class="section">
    @yield('content')
    <hr>
    <ul class="list-group">
        <li class="list-group-item"><a href="/">Home</a></li>
        <li class="list-group-item"><a href="/contact">Contact</a></li>
        <li class="list-group-item"><a href="/about">About Us</a></li>
    </ul>
</body>

</html>
