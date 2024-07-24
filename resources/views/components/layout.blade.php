<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sistem Perisai Diri</title>
        {{-- Menambahkan Tailwind CSS --}}
        @vite(['resources/css/app.css','resources/js/app.js'])
        <link href="css/datatables.min.css" rel="stylesheet">
        <script src="js/datatables.min.js"></script>
    </head>
    <body>   
        <x-aside></x-aside>
        
        {{-- Main --}}
        <div class="p-4 sm:ml-64">
            {{ $slot }}
        </div>
    </body>
</html>