<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'HOIC' }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/jquery3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/custom/fasa.js') }}"></script>


</head>

<body>
    <main class="flex min-h-screen flex-col justify-center items-center">
        <div class="bg-black bg-opacity-80 fixed top-0 left-0 h-screen w-screen hidden z-20" id="side-mask"></div>
        {{ $slot }}
        @if ($category !== 'auth')
            <x-footer />
        @endif
    </main>
</body>

</html>
