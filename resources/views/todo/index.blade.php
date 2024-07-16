<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">

        <div class=" mx-auto sm:px-6 lg:px-8">
            <section class="container px-4 mx-auto">
                <div class="flex flex-col">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <div class="overflow-hidden md:rounded-lg">
                                <livewire:todo-table></livewire:todo-table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>


</x-app-layout>
