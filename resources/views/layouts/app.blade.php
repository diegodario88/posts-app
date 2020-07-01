<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') - page</title>
    @include('imports')
</head>

<body>
    @include('navbar')
    <main class="container">
        @yield('content')
    </main>
    @include('footer')
</body>

</html>
