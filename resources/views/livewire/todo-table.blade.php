<div>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
        <tr>
            <th scope="col" wire:click="setSort('id')"
                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 cursor-pointer">
                #
            </th>
            <th scope="col"
                class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500">
                <div class="flex items-center gap-x-3">

                    <input type="checkbox" class="border-gray-300 rounded-md checked:bg-blue-500">
                    <button class="flex items-center gap-x-1" wire:click="setSort('title')">
                        <span>Title</span>

                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M10.22 15.97L9 17.19V5C9 4.59 8.66 4.25 8.25 4.25C7.84 4.25 7.5 4.59 7.5 5V17.19L6.28 15.97C5.99 15.68 5.51 15.68 5.22 15.97C4.93 16.26 4.93 16.74 5.22 17.03L7.72 19.53C7.79 19.6 7.87 19.65 7.96 19.69C8.05 19.73 8.15 19.75 8.25 19.75C8.35 19.75 8.45 19.73 8.54 19.69C8.63 19.65 8.71 19.6 8.78 19.53L11.28 17.03C11.57 16.74 11.57 16.26 11.28 15.97C10.99 15.68 10.51 15.68 10.22 15.97Z"
                                    fill="#6b7280"></path>
                                <path
                                    d="M14 11.21C14.39 11.35 14.82 11.15 14.96 10.76L15.24 9.98001H17.27L17.55 10.76C17.66 11.07 17.95 11.26 18.26 11.26C18.34 11.26 18.43 11.25 18.51 11.22C18.9 11.08 19.1 10.65 18.96 10.26L17.25 5.47001C17.08 5.04001 16.69 4.76001 16.25 4.76001C15.81 4.76001 15.42 5.04001 15.25 5.49001L13.55 10.26C13.41 10.65 13.61 11.08 14 11.22V11.21ZM16.73 8.48001H15.77L16.25 7.14001L16.73 8.48001Z"
                                    fill="#6b7280"></path>
                                <path
                                    d="M18.67 13.46C18.48 13.02 18.08 12.75 17.62 12.75H14.51C14.1 12.75 13.76 13.09 13.76 13.5C13.76 13.91 14.1 14.25 14.51 14.25H16.9L14.07 17.2C13.73 17.56 13.64 18.08 13.83 18.54C14.02 18.98 14.42 19.25 14.88 19.25H18.01C18.42 19.25 18.76 18.91 18.76 18.5C18.76 18.09 18.42 17.75 18.01 17.75H15.62L18.44 14.82C18.78 14.46 18.88 13.93 18.68 13.47L18.67 13.46Z"
                                    fill="#6b7280"></path>
                            </g>
                        </svg>
                    </button>
                </div>
            </th>


            <th scope="col"
                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 cursor-pointer">
                <div class="flex items-center gap-x-3">

                    <button class="flex items-center gap-x-1" wire:click="setSort('created_at')">
                        <span>Created at</span>

                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M8.38001 19.75C8.27987 19.7512 8.1805 19.7324 8.08775 19.6946C7.99501 19.6568 7.91077 19.6008 7.84001 19.53L5.34001 17C5.19956 16.8593 5.12067 16.6687 5.12067 16.47C5.12067 16.2712 5.19956 16.0806 5.34001 15.94C5.48357 15.8013 5.67539 15.7238 5.87501 15.7238C6.07462 15.7238 6.26644 15.8013 6.41001 15.94L8.41001 17.94L10.41 15.94C10.5536 15.8013 10.7454 15.7238 10.945 15.7238C11.1446 15.7238 11.3364 15.8013 11.48 15.94C11.6205 16.0806 11.6993 16.2712 11.6993 16.47C11.6993 16.6687 11.6205 16.8593 11.48 17L8.98001 19.5C8.90562 19.5846 8.8129 19.6511 8.70893 19.6944C8.60495 19.7377 8.49245 19.7567 8.38001 19.75Z"
                                    fill="#6b7280"></path>
                                <path
                                    d="M8.38 19.75C8.18015 19.75 7.98834 19.6713 7.8461 19.5309C7.70386 19.3906 7.62262 19.1998 7.62 19V5C7.62262 4.80017 7.70386 4.60942 7.8461 4.46905C7.98834 4.32868 8.18015 4.24998 8.38 4.25C8.57717 4.25263 8.76538 4.33281 8.90387 4.47317C9.04237 4.61354 9.12001 4.80281 9.12 5V19C9.12001 19.1972 9.04237 19.3865 8.90387 19.5268C8.76538 19.6672 8.57717 19.7474 8.38 19.75Z"
                                    fill="#6b7280"></path>
                                <path
                                    d="M17.12 11.25C16.9228 11.2473 16.7346 11.1672 16.5961 11.0268C16.4576 10.8864 16.38 10.6972 16.38 10.5V6.43996L16 6.65996C15.825 6.75676 15.6186 6.78007 15.4264 6.72474C15.2342 6.66942 15.0718 6.54 14.975 6.36496C14.8782 6.18992 14.8549 5.98359 14.9102 5.79136C14.9655 5.59914 15.095 5.43676 15.27 5.33996L15.92 4.99996C16.0943 4.87274 16.2999 4.7953 16.5148 4.77593C16.7297 4.75655 16.9458 4.79597 17.14 4.88996C17.3633 4.99521 17.5518 5.16234 17.6829 5.3715C17.8141 5.58067 17.8825 5.82308 17.88 6.06996V10.5C17.8774 10.6998 17.7961 10.8905 17.6539 11.0309C17.5117 11.1713 17.3198 11.25 17.12 11.25Z"
                                    fill="#6b7280"></path>
                                <path
                                    d="M16.62 17.25C16.1754 17.248 15.7414 17.1144 15.3727 16.8659C15.004 16.6175 14.7172 16.2654 14.5484 15.8541C14.3797 15.4428 14.3365 14.9907 14.4245 14.5549C14.5124 14.1191 14.7275 13.7192 15.0425 13.4055C15.3576 13.0918 15.7585 12.8785 16.1947 12.7925C16.6309 12.7065 17.0828 12.7516 17.4933 12.9222C17.9039 13.0928 18.2547 13.3812 18.5015 13.751C18.7483 14.1208 18.88 14.5554 18.88 15C18.8813 15.2967 18.8237 15.5907 18.7105 15.8649C18.5973 16.1392 18.4307 16.3882 18.2204 16.5975C18.0102 16.8068 17.7604 16.9723 17.4857 17.0843C17.2109 17.1963 16.9167 17.2526 16.62 17.25ZM16.62 14.25C16.4211 14.25 16.2303 14.329 16.0897 14.4696C15.949 14.6103 15.87 14.8011 15.87 15C15.87 15.1989 15.949 15.3897 16.0897 15.5303C16.2303 15.671 16.4211 15.75 16.62 15.75C16.8189 15.75 17.0097 15.671 17.1503 15.5303C17.291 15.3897 17.37 15.1989 17.37 15C17.37 14.8011 17.291 14.6103 17.1503 14.4696C17.0097 14.329 16.8189 14.25 16.62 14.25Z"
                                    fill="#6b7280"></path>
                                <path
                                    d="M16.11 19.25H15.62C15.4211 19.25 15.2303 19.171 15.0897 19.0303C14.949 18.8897 14.87 18.6989 14.87 18.5C14.87 18.3011 14.949 18.1103 15.0897 17.9697C15.2303 17.829 15.4211 17.75 15.62 17.75H16.11C16.4292 17.7433 16.7344 17.6175 16.9657 17.3974C17.197 17.1772 17.3376 16.8785 17.36 16.56C17.36 16.27 17.36 15.92 17.36 15.5V15C17.36 14.8028 17.4376 14.6135 17.5761 14.4732C17.7146 14.3328 17.9028 14.2526 18.1 14.25C18.2998 14.25 18.4916 14.3287 18.6339 14.4691C18.7761 14.6094 18.8574 14.8002 18.86 15V15.5C18.86 15.95 18.86 16.32 18.86 16.64C18.8147 17.3415 18.5063 18 17.9964 18.4839C17.4866 18.9678 16.8129 19.2414 16.11 19.25Z"
                                    fill="#6b7280"></path>
                            </g>
                        </svg>
                    </button>
                </div>
            </th>

            <th scope="col" wire:click="setSort('state')"
                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 cursor-pointer">
                State
            </th>

            <th scope="col"
                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                Location
            </th>

            <th scope="col"
                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                Notes
            </th>

            <th scope="col" wire:click="setSort('priority')"
                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 cursor-pointer">
                Priority
            </th>

            <th scope="col" wire:click="setSort('deadline')"
                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 cursor-pointer">
                Deadline
            </th>

            <th></th>
            <th scope="col"
                class="w-full py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                <div class="flex justify-end items-center gap-4 mt-4 mb-4 px-4">
                    <a href="{{ route('todo.create') }}" class="relative select-none">
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
        <tbody class="bg-white divide-y divide-gray-200">
        @foreach($this->todos() as $todo)
            <tr>
                <td class="p-4">
                    {{$todo->id}}
                </td>
                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                    <div class="inline-flex items-center gap-x-3">
                        <input type="checkbox"
                               class="border-gray-300 rounded-md checked:bg-blue-500">

                        <span>{{$todo->title}}</span>
                    </div>
                </td>
                <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{$todo->created_at}}</td>
                <td>
                    <div>
                        <label wire:click.debounce="changeState({{ $todo->id }})"
                               class="flex items-center cursor-pointer select-none text-dark">
                            <div class="relative">
                                <input {{ $todo->state ? 'checked': '' }} wire:key="todo-switch-{{ $todo->id }}"
                                       type="checkbox"
                                       class="peer sr-only"
                                />
                                <div
                                    class="block h-8 rounded-full w-14 {{ $todo->state ? 'bg-emerald-500' : 'bg-red-500' }} transition-colors duration-300"></div>
                                <div
                                    class="absolute flex items-center justify-center w-6 h-6 transition-all duration-500 bg-white rounded-full dot left-1 top-1 peer-checked:translate-x-full peer-checked:bg-white"></div>
                            </div>
                        </label>
                    </div>
                </td>
                <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                    <div class="flex items-center gap-x-2">
                        <div>
                            <h2 class="text-sm font-medium text-gray-800 ">{{$todo->location}}</h2>
                        </div>
                    </div>
                </td>
                <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{$todo->notes}}</td>
                <td>
                    <span
                        class="px-2 py-1 text-sm font-medium text-white rounded-full {{ $todo->priority == 'high' ? 'bg-red-500' : ($todo->priority == 'medium' ? 'bg-yellow-500' : 'bg-emerald-500') }}">
                                            {{ ucfirst($todo->priority) }}
                    </span>
                </td>

                <td class="px-6 py-4 text-sm text-gray-500 whitespace-no-wrap">
                    {{ $todo->deadline ? $todo->deadline->format('d-m-Y') : '-' }}
                </td>

                <td class="px-4 py-4 text-sm whitespace-nowrap w-full">


                    <div class="flex items-right justify-end gap-4">
                        <a href="{{route('todo.show', $todo)}}"
                           class="text-gray-500 transition-colors duration-200 focus:outline-none">
                            <svg width="24px" height="24px" viewBox="0 0 24 24"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                   stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z"
                                        stroke="#000000" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z"
                                        stroke="#000000" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </a>

                        <a href="{{route('todo.edit', $todo)}}"
                           class="text-blue-500 transition-colors duration-200 focus:outline-none">
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
                    </div>
                </td>
                <td class="px-6 py-4 text-end text-sm font-medium">
                    <form action="{{ route('todo.destroy', ['todo'=>$todo]) }}" method="POST">
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
        @endforeach
        </tbody>
    </table>
</div>
