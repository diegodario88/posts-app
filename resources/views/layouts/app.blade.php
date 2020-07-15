<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') - page</title>
    @include('partials.imports')
</head>

<body>
    <div class="app">
        <main class="py-4">
            @include('partials.navbar')
            @yield('content')
            @include('partials.footer')
        </main>
    </div>
</body>

</html>
