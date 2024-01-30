<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>{{ $title ?? 'First Livewire' }}</title>
    </head>
    <body>
        <header>
            <h1 class="px-3 pt-3 text-3xl font-bold">Contacts</h1>
            <livewire:search-bar />
        </header>
        <main class="p-3">
            {{ $slot }}
        </main>

    </body>
</html>


