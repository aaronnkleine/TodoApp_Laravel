<form action="{{ isset($todo) ? route('todo.update', $todo->id) : route('todo.store') }}" method="POST">
    @csrf
    @if(isset($todo))
        @method('PUT')
    @endif
    <!-- Andere Felder... -->
    <div class="mb-4">
        <label for="tags" class="block text-sm font-medium text-gray-700">Tags</label>
        <select name="tags[]" id="tags" class="mt-1 block w-full" multiple>
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}"
                        @if(isset($todo) && $todo->tags->contains($tag->id)) selected @endif>{{ $tag->name }}
                </option>
            @endforeach
        </select>
    </div>
    <!-- Andere Felder... -->
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
        {{ isset($todo) ? 'Update' : 'Create' }}
    </button>
</form>
