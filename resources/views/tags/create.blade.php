<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Tag') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('tags.store') }}" method="POST">
                <div class="flex justify-between">

                    <a href="{{ url()->previous() }}"
                       class="rounded-md bg-white py-2 px-4 my-4 text-sm border-0 shadow-sm ring-1 ring-inset ring-gray-300 text-gray-900 text-center">Go back</a>
                    <button type="submit"
                            class="py-2 px-4 my-4 border-0 shadow-sm ring-1 ring-inset ring-gray-300 text-center text-sm rounded-md bg-blue-500 text-white">
                        Save
                    </button>
                </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-md p-6">
                @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" id="name" class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                    </div>
            </div>
            </form>
        </div>
    </div>
</x-app-layout>
