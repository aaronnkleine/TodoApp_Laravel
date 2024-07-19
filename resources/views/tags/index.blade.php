<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tags') }}
        </h2>
    </x-slot>
    <!-- component -->
    <section class="max-w-4xl py-12 px-4 mx-auto">
        <div class="flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden md:rounded-md">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-800">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                    #
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Name
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Created at

                                <th scope="col" class="relative py-3.5 px-4">
                                    <span class="sr-only">Actions</span>
                                </th>

                                <th scope="col"
                                    class="py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                    <div class="flex justify-end items-center gap-4 mt-4 mb-4 px-4">
                                        <a href="{{ route('tags.create') }}" class="relative select-none">
                                            <button
                                                class="font-sans font-lg text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 h-10 text-lg bg-blue-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none rounded-full"
                                                type="button">
                                                +
                                            </button>
                                        </a>
                                    </div>
                                </th>

                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            @foreach ($tags as $tag)
                            <tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">
                                        <span>{{$tag->id}}</span>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    <div class="flex items-center gap-x-2">
                                        <div>
                                            <h2 class="text-sm font-medium text-gray-800 dark:text-white ">{{$tag->name}}</h2>
                                            <p class="text-xs font-normal text-gray-600 dark:text-gray-400">Assigned to {{$tag->todos()->count()}} todos</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">{{$tag->created_at}}</td>
                                <td class="px-4 py-2">
                                    <a href="{{ route('tags.edit', $tag->id) }}" class="text-blue-500 transition-colors duration-200 focus:outline-none">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24"
                                             fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                               stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path
                                                    d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z"
                                                    stroke="#3b82f6" stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13"
                                                    stroke="#3b82f6" stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </td>
                                <td class="px-6 py-4 text-end text-sm font-medium ">
                                <form  method="POST" class="inline" action="{{ route('tags.destroy', $tag->id) }}">
                                        @csrf
                                        @method('DELETE')
                                            <button type="submit"
                                                    class="text-red-500 hover:text-red-900 focus:outline-none">
                                                <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                     fill="none"
                                                     xmlns="http://www.w3.org/2000/svg" stroke="#ef4444">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                       stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M10 12V17" stroke="#ff0000"
                                                              stroke-width="2"
                                                              stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                        <path d="M14 12V17" stroke="#ff0000"
                                                              stroke-width="2"
                                                              stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                        <path d="M4 7H20" stroke="#ff0000" stroke-width="2"
                                                              stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                        <path
                                                            d="M6 10V18C6 19.6569 7.34315 21 9 21H15C16.6569 21 18 19.6569 18 18V10"
                                                            stroke="#ff0000" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z"
                                                            stroke="#ff0000" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </button>
                                        </form>


                                </td>
                            </tr>

                            <tr>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
