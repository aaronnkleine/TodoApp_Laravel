<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todo') }}
        </h2>
    </x-slot>

    <div class="text-black/50">

        <div class="relative flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">

            <div class="min-w-screen py-6 flex flex-col justify-center sm:py-12 w-full items-center">
                <div class="py-3 w-3/4 sm:w-2/3 lg:w-1/2">

                    <div class="flex justify-between">
                        <a href="{{route('todo.index')}}"
                           class="rounded-md bg-white py-2 px-4 my-4 text-sm border-0 shadow-sm ring-1 ring-inset ring-gray-300 text-gray-900 text-center">Go
                            back</a>
                        <a href="{{route('todo.edit', ['todo' => $todo->id])}}"
                           class="py-2 px-4 my-4 border-0 shadow-sm ring-1 ring-inset ring-gray-300 text-center text-sm rounded-md bg-blue-500 text-white">Edit</a>
                    </div>
                    <div class="bg-white flex flex-col rounded-xl shadow-lg w-full">

                        <div class="px-12 py-5">
                            <h2 class="text-gray-800 text-left text-3xl rounded-xl font-semibold w-full">
                                @if($todo->state == 1)
                                    <div
                                        class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>

                                        <h2 class="text-sm font-normal">Done</h2>
                                    </div>
                                @else
                                    <div
                                        class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>

                                        <h2 class="text-sm font-normal">Not done</h2>
                                    </div>
                                @endif
                                {{$todo->title}}</h2>
                            <h2 class="px-3 py-2 text-sm font-normal text-gray-500 text-left">
                                {{$todo->created_at}} | {{$todo->location}}
                            </h2>
                        </div>
                        <div class="bg-gray-50 pt-8 flex flex-col rounded-xl items-left">
                            <div class="w-3/4 flex flex-col">
                                <div
                                    class="px-8 w-full text-gray-700 rounded-xl resize-none text-left">{{$todo->description}}</div>
                                <br>
                                <div
                                    class="px-8 pb-8 w-full text-b text-gray-800 rounded-xl text-lg resize-none text-left">{{$todo->notes}}</div>
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </div>
</div>
</x-app-layout>
