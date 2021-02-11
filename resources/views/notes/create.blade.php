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
            <p><a href="{{ route('notes.index') }}">Takaisin</a></p>

            <h1>Luodaan uusi muistiinpano</h1>

            <div class="block mt-8 p-10 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="flex flex-col w-full">

                    <form method="post">
                        {{ csrf_field() }}
                        <div class="flex flex-col mb-4">
                            <label>Otsikko</label>
                            <input class="border border-black p-3" type="text" name="heading" value="" placeholder="Otsikko">
                        </div>

                        <div class="flex flex-col mb-4">
                            <label>Sisältö</label>
                            <textarea class="border border-black p-3 h-40" name="body" placeholder=""></textarea>
                        </div>

                        <div class="mb-4">
                            <input class="bg-gray-400 p-3" type="submit" value="Tallenna">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
