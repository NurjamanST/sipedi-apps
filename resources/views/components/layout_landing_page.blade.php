<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="img/logo-pdkt.png" type="image/x-icon">
        <title>Sistem Perisai Diri</title>
        {{-- Menambahkan Tailwind CSS --}}
        @vite(['resources/css/app.css','resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    </head>
    <body class="h-full">
         {{-- Main --}}
         <div class="p-4">
            {{ $slot }}
        </div>
    </body>
</html>