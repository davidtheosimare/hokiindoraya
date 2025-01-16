<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    @yield('meta')
    @livewireStyles
    @vite('resources/css/app.css')
</head>
<body>


 {{$slot}}
 @livewireScripts
 @vite('resources/js/app.js')
 <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

</body>
</html>
