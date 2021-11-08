<!DOCTYPE html>

<html>

<head>
    <title>@yield('title', 'Unnamed Homestead Page')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>

<body>
    @yield('content')
    <hr>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/about">About Us</a></li>
    </ul>
</body>

</html>
