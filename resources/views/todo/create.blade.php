<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden md:rounded-md">
                        <livewire:todo-create></livewire:todo-create>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
