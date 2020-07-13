<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') - page</title>
    @include('partials.imports')
</head>

<body>
    @include('partials.navbar')
    <main class="container">
        @yield('content')
    </main>
    @include('partials.footer')
</body>

</html>
