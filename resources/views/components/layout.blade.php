<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="mx-auto mt-10 max-w-2xl text-slate-700 bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90%">
<h1 class="text-2xl font-bold">
    tailwind test
</h1>
{{ $slot }}
</body>
</html>
