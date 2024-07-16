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
                    <form action="{{route('todo.update', $todo)}}" method="post">
                        @method('PATCH')
                        <div class="flex justify-between">
                            <a href="{{ url()->previous() }}"
                               class="rounded-md bg-white py-2 px-4 my-4 text-sm border-0 shadow-sm ring-1 ring-inset ring-gray-300 text-gray-900 text-center">Go
                                back</a>
                            <button type="submit"
                                    class="py-2 px-4 my-4 border-0 shadow-sm ring-1 ring-inset ring-gray-300 text-center text-sm rounded-md bg-blue-500 text-white">
                                Save
                            </button>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="bg-white flex flex-col rounded-xl shadow-lg w-full">

                            @csrf
                            <div
                                class="grid grid-cols-1 gap-x-8 gap-y-10 border-gray-900/10 pb-12 md:grid-cols-3  p-5">
                                <div>
                                    <h2 class="text-base font-semibold leading-7 text-gray-900">Edit Todo</h2>
                                    <p class="mt-1 text-sm leading-6 text-gray-600"></p>
                                </div>

                                <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
                                    <div class="sm:col-span-3">
                                        <label for="title"
                                               class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                                        <div class="mt-2">
                                            <input type="text" name="title" id="title" value="{{$todo->title}}"
                                                   class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="location" class="block text-sm font-medium leading-6 text-gray-900">Location</label>
                                        <div class="mt-2">
                                            <input type="text" name="location" id="location" value="{{$todo->location}}"
                                                   class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="state"
                                               class="block text-sm rounded-md font-medium leading-6 text-gray-900">State</label>
                                        <div class="mt-2">
                                            <!-- Hidden input to ensure a value is always sent -->
                                            <!-- Checkbox input -->
                                            <input type="checkbox" name="state" class="rounded-md size-6 checked:bg-blue-500"
                                                   id="state" {{ $todo->state ? 'checked' : '' }} >
                                        </div>
                                    </div>


                                    <div class="col-span-full">
                                        <label for="description"
                                               class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                        <div class="mt-2">
                                            <input type="text" name="description" id="description"
                                                   value="{{$todo->description}}"
                                                   class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="col-span-full">
                                        <label for="notes"
                                               class="block text-sm font-medium leading-6 text-gray-900">Notes</label>
                                        <div class="mt-2">
                                            <input type="text" name="notes" id="notes" value="{{$todo->notes}}"
                                                   class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>

</x-app-layout>
