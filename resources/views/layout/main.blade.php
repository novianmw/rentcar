<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
    @bukStyles
</head>
<body>
    <section class="w-full h-full">        
        @include('components.navbar') 
        @yield('content')
        @include('components.footer')
    </section>
    @bukScripts
</body>
</html>