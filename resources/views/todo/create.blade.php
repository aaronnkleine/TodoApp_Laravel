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
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
    <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="min-h-screen min-w-screen py-6 flex flex-col justify-center sm:py-12 w-full items-center">
            <div class="py-3 w-3/4 sm:w-2/3 lg:w-1/2">
                <div class="bg-white flex flex-col rounded-xl shadow-lg w-full">
                    <form action="{{route('todo.store')}}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3  p-5">
                            <div>
                                <h2 class="text-base font-semibold leading-7 text-gray-900">Create Todo</h2>
                                <p class="mt-1 text-sm leading-6 text-gray-600"></p>
                            </div>

                            <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
                                <div class="sm:col-span-3">
                                    <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                                    <div class="mt-2">
                                        <input type="text" name="title" id="title" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="location" class="block text-sm font-medium leading-6 text-gray-900">Location</label>
                                    <div class="mt-2">
                                        <input type="text" name="location" id="location" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="state" class="block text-sm font-medium leading-6 text-gray-900">State</label>
                                    <div class="mt-2">
                                        <select id="state" name="state" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" required>
                                            <option value="false">Not done</option>
                                            <option value="true">Done</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                    <div class="mt-2">
                                        <input type="text" name="description" id="description" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <label for="notes" class="block text-sm font-medium leading-6 text-gray-900">Notes</label>
                                    <div class="mt-2">
                                        <input type="text" name="notes" id="notes" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="sm:col-span-1 flow-root">
                                    <label for="go-back" class="block text-sm font-medium leading-6 text-gray-900"></label>
                                    <div class="mt-2">
                                        <a href="{{route('todo.index')}}">
                                            <button type="button" class="rounded-md bg-white py-2 px-4 text-sm border-0 shadow-sm ring-1 ring-inset ring-gray-300 text-gray-900">
                                                Go back
                                            </button>
                                        </a>
                                    </div>
                                </div>

                                <div class="sm:col-span-1">
                                    <label for="go-back" class="block text-sm font-medium leading-6"></label>
                                    <div class="mt-2">
                                        <button type="submit" class="rounded-md bg-blue-500 py-2 px-4 text-sm border-0 shadow-sm ring-1 ring-inset ring-gray-300 text-white">
                                            Create
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>

</div>
</body>
</html>
