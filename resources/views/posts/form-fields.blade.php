<div>
    <x-input-label for="title" :value="__('Title')" />
    <x-text-input id="title"
                  name="title"
                  type="text"
                  value="{{ old('title', $post->title) }}"
                  class="block w-full mt-1"
    />
    <x-input-error :messages="$errors->get('title')" class="mt-2" />
</div>

<div class="mt-4">
    <x-input-label for="summary" :value="__('Summary')" />
    <x-text-input id="summary"
                  name="summary"
                  type="text"
                  value="{{ old('summary', $post->summary) }}"
                  class="block w-full mt-1"
                  maxlength="50"
    />
    <x-input-error :messages="$errors->get('summary')" class="mt-2" />
</div>

<div class="mt-4">
    <x-input-label for="body" :value="__('Body')" />
    <x-textarea id="body"
                name="body"
                class="block w-full mt-1"
    >{{ old('body', $post->body) }}</x-textarea>
    <x-input-error :messages="$errors->get('body')" class="mt-2" />
</div>

<div class="mt-4">
    <x-input-label for="status" :value="__('Status')" />
    <select id="status"
            name="status"
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
    >
        @php
            $statuses = ['published', 'draft', 'archived', 'pending'];
            $selectedStatus = old('status', $post->status);
        @endphp
        @foreach($statuses as $status)
            <option value="{{ $status }}" {{ $selectedStatus === $status ? 'selected' : '' }}>
                {{ ucfirst($status) }}
            </option>
        @endforeach
    </select>
    <x-input-error :messages="$errors->get('status')" class="mt-2" />
</div>

<div class="mt-4">
    <x-input-label for="reading_time" :value="__('Reading Time (minutes)')" />
    <x-text-input id="reading_time"
                  name="reading_time"
                  type="number"
                  value="{{ old('reading_time', $post->reading_time) }}"
                  class="block w-full mt-1"
                  min="1"
                  max="60"
    />
    <x-input-error :messages="$errors->get('reading_time')" class="mt-2" />
</div>

<div class="mt-4">
    <x-input-label for="published_at" :value="__('Published at')" />
    <x-text-input id="published_at"
                  name="published_at"
                  type="date"
                  value="{{ old('published_at', $post->published_at) }}"
                  class="block w-full mt-1"
    />
    <x-input-error :messages="$errors->get('published_at')" class="mt-2" />
</div>
