<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tags') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-md p-6">
                <div>
                        <div class="flex justify-end mb-4">
                            <a href="{{ route('tags.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create Tag</a>
                        </div>
                        <table class="min-w-full bg-white">
                            <thead>
                            <tr>
                                <th class="w-1/3 px-4 py-2">Name</th>
                                <th class="w-1/3 px-4 py-2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($tags as $tag)
                                <tr>
                                    <td class="border px-4 py-2">{{ $tag->name }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('tags.edit', $tag->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                                        <form action="{{ route('tags.destroy', $tag->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

        </div>
    </div>
</x-app-layout>
