<div>
    <div class="text-black/50">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="relative flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="min-w-screen py-6 flex flex-col justify-center sm:py-12 w-full items-center">
                <div class="py-3 w-3/4 sm:w-2/3 lg:w-1/2">
                    <div class="flex justify-between">
                        <a href="{{ route('todo.index') }}"
                           class="rounded-md bg-white py-2 px-4 my-4 text-sm border-0 shadow-sm ring-1 ring-inset ring-gray-300 text-gray-900 text-center">Go
                            back</a>
                        <button wire:click="save"
                            class="py-2 px-4 my-4 border-0 shadow-sm ring-1 ring-inset ring-gray-300 text-center text-sm rounded-md bg-blue-500 text-white">
                            Create
                        </button>
                    </div>
                    <div class="bg-white flex flex-col rounded-xl shadow-lg w-full">

                        <div
                            class="grid grid-cols-1 gap-x-8 gap-y-10 border-gray-900/10 pb-12 md:grid-cols-3  p-5">
                            <div>
                                <h2 class="text-base font-semibold leading-7 text-gray-900">Create Todo</h2>
                                <p class="mt-1 text-sm leading-6 text-gray-600"></p>
                            </div>

                            <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
                                <div class="sm:col-span-3">
                                    <label for="title"
                                           class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                                    <div class="mt-2">
                                        <input type="text" name="title" id="title" autocomplete="off"  wire:model.live="title"
                                               class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                               required>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="priority" class="block text-sm font-medium leading-6 text-gray-900">Priority</label>
                                    <select id="priority" name="priority"
                                            class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                            required>
                                        <option value="low">{{ __('Low') }}</option>
                                        <option value="medium">{{ __('Medium') }}</option>
                                        <option value="high">{{ __('High') }}</option>
                                    </select>
                                </div>

                                <div class="col-span-full">
                                    <label for="description"
                                           class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                    <div class="mt-2">
                                            <textarea type="text" name="description" id="description" autocomplete="off"
                                                      class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300  focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <label for="notes"
                                           class="block text-sm font-medium leading-6 text-gray-900">Notes</label>
                                    <div class="mt-2">
                                        <input type="text" name="notes" id="notes" autocomplete="off"
                                               class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="location" class="block text-sm font-medium leading-6 text-gray-900">Location</label>
                                    <div class="mt-2">
                                        <input type="text" name="location" id="location" autocomplete="off"
                                               class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="relative sm:col-span-3">
                                    <label for="deadline" class="block text-sm font-medium leading-6 text-gray-900">Deadline</label>
                                    <div
                                        class="absolute pt-8 inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                               stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path
                                                    d="M17 4.25H15.75V3C15.75 2.80109 15.671 2.61032 15.5303 2.46967C15.3897 2.32902 15.1989 2.25 15 2.25C14.8011 2.25 14.6103 2.32902 14.4697 2.46967C14.329 2.61032 14.25 2.80109 14.25 3V4.25H9.75V3C9.75 2.80109 9.67098 2.61032 9.53033 2.46967C9.38968 2.32902 9.19891 2.25 9 2.25C8.80109 2.25 8.61032 2.32902 8.46967 2.46967C8.32902 2.61032 8.25 2.80109 8.25 3V4.25H7C6.27065 4.25 5.57118 4.53973 5.05546 5.05546C4.53973 5.57118 4.25 6.27065 4.25 7V18C4.25 18.7293 4.53973 19.4288 5.05546 19.9445C5.57118 20.4603 6.27065 20.75 7 20.75H17C17.7293 20.75 18.4288 20.4603 18.9445 19.9445C19.4603 19.4288 19.75 18.7293 19.75 18V7C19.75 6.27065 19.4603 5.57118 18.9445 5.05546C18.4288 4.53973 17.7293 4.25 17 4.25ZM7 5.75H8.25V7C8.25 7.19891 8.32902 7.38968 8.46967 7.53033C8.61032 7.67098 8.80109 7.75 9 7.75C9.19891 7.75 9.38968 7.67098 9.53033 7.53033C9.67098 7.38968 9.75 7.19891 9.75 7V5.75H14.25V7C14.25 7.19891 14.329 7.38968 14.4697 7.53033C14.6103 7.67098 14.8011 7.75 15 7.75C15.1989 7.75 15.3897 7.67098 15.5303 7.53033C15.671 7.38968 15.75 7.19891 15.75 7V5.75H17C17.3315 5.75 17.6495 5.8817 17.8839 6.11612C18.1183 6.35054 18.25 6.66848 18.25 7V9.75H5.75V7C5.75 6.66848 5.8817 6.35054 6.11612 6.11612C6.35054 5.8817 6.66848 5.75 7 5.75ZM17 19.25H7C6.66848 19.25 6.35054 19.1183 6.11612 18.8839C5.8817 18.6495 5.75 18.3315 5.75 18V11.25H18.25V18C18.25 18.3315 18.1183 18.6495 17.8839 18.8839C17.6495 19.1183 17.3315 19.25 17 19.25Z"
                                                    fill="#6b7280"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <input id="deadline" name="deadline" datepicker datepicker-buttons
                                           datepicker-autoselect-today datepicker-autohide
                                           autocomplete="off"
                                           type="text"
                                           class="mt-2 block text-gray-900 border-0 py-1.5 shadow-sm rounded-md ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6 w-full ps-10"
                                           placeholder="Select date">
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="tags"
                                           class="block text-sm font-medium leading-6 text-gray-900">Tags</label>
                                    <div
                                        class="mt-2 block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        @foreach ($this->getTags() as $tag)
                                            @if (!in_array($tag->id, $this->selectedTags))
                                                <p wire:click="addTag({{ $tag->id }})">{{ $tag->name }}</p>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="tags"
                                           class="block text-sm font-medium leading-6 text-gray-900">Selected
                                        Tags</label>
                                    <div
                                        class="mt-2 block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        @foreach ($this->getSelectedTags() as $tag)
                                            <p wire:click="removeTag({{ $tag->id }})">{{ $tag->name }}</p>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
