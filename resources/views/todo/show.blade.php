<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
    <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="min-h-screen min-w-screen py-6 flex flex-col justify-center sm:py-12 w-full items-center">
            <div class="py-3 w-3/4 sm:w-2/3 lg:w-1/2">
                <div class="bg-white flex flex-col rounded-xl shadow-lg w-full">

                    <div class="px-12 py-5">
                        <h2 class="text-gray-800 text-center text-3xl font-semibold">
                            @if($todo->state == 1)
                                <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                                <h2 class="text-sm font-normal">Done</h2>
                            </div>
                            @else
                                <div class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 dark:bg-gray-800">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                    <h2 class="text-sm font-normal">Not done</h2>
                                </div>
                            @endif
                                {{$todo->title}}</h2>
                        <h2 class="px-4 py-3.5 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400 text-center">
                            {{$todo->created_at}} | {{$todo->location}}
                        </h2>
                    </div>
                    <div class="bg-gray-50 pt-8 flex flex-col items-center">
                        <div class="w-3/4 flex flex-col">
                            <div class="p- w-full text-gray-700 rounded-xl resize-none text-center">{{$todo->description}}</div>
                            <br>
                            <div class="p- w-full text-b text-gray-800 rounded-xl text-lg resize-none text-center">{{$todo->notes}}</div>
                            <a href="{{route('todo.edit', ['todo' => $todo->id])}}" class="py-3 my-8 text-center text-lg bg-gradient-to-r from-purple-500 to-indigo-600 rounded-xl text-white">Edit</a>
                        </div>
                    </div>
                    <div class="h-20 flex items-center justify-center">
                        <a href="{{route('todo.index')}}" class="text-gray-400">Go back</a>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
</body>
</html>
