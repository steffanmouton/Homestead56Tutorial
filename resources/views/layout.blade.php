<!DOCTYPE html>

<html>

<head>
    <title>@yield('title', 'Unnamed Homestead Page')</title>
</head>

<body>
    @yield('content')
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/about">About Us</a></li>
    </ul>
</body>

</html>
