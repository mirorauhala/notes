<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<body class="antialiased">
    <div class="flex relative min-h-screen bg-gray-100 dark:bg-gray-900 sm:pt-0">

        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <p><a href="{{ route('notes.create') }}">Luo uusi</a></p>

            @foreach($notes as $note)
            <a href="{{ route('notes.show', ['note' => $note->id]) }}" class="block mt-8 p-10 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="flex flex-col w-full">
                    <h1 class="font-bold">{{ $note->heading }}</h1>
                    <p>{{ $note->body }}</p>
                </div>
            </a>
            @endforeach

        </div>
    </div>
</body>
</html>
