@props(['title'])
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- import tailwind --}}
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>
<body>
    @include('partials._navigation')
    <div class="bg-green-500 text-green-100">
        {{ Session::get('status') }}
    </div>
    
    {{ $slot }}
    @vite('resources/js/app.js')
</body>
</html>