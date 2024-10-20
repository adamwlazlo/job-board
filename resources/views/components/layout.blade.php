<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body
    class="mx-auto mt-10 max-w-2xl text-slate-700 bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90%">
<nav class="mb-8 flex justify-between text-lg font-medium">
    <ul class="flex space-x-2">
        <li>
            <a href="{{ route('jobs.index') }}">Home</a>
        </li>
    </ul>
    <ul class="flex space-x-2">
        @auth
            <li>
                {{ auth()->user()->name ?? 'Guest' }}
            </li>
            <li>
                <form action="{{ route('auth.destroy') }}" method="post">
                    @csrf
                    @method('delete')
                    <button>
                        Logout
                    </button>
                </form>
            </li>
        @else
            <li>
                <a href="{{ route('auth.create') }}">Login</a>
            </li>
        @endauth
    </ul>
</nav>
{{ $slot }}
</body>
</html>
