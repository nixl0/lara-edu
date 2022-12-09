@extends('base')

@section('title')
    Create article
@endsection

@section('content')
    <form action="/articles" method="POST" class="p-5">
        @csrf

        {{-- title --}}
        <div class="pb-2">
            <label for="title">
                Title
            </label>
            <div class="mt-2">
                <input name="title" type="text" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg shadow-sm"
                    placeholder="e.g. My favorite chocolate cookies have raisins" value="{{ old('title') }}">
            </div>
            @error('title')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- slug --}}
        <div class="pb-2">
            <label for="slug">
                Slug
            </label>
            <div class="mt-2">
                <input name="slug" type="text" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg shadow-sm"
                    placeholder="e.g. Cookie commercial betrayal" value="{{ old('slug') }}">
            </div>
            @error('slug')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- tags --}}
        <div class="pb-2">
            <label for="tags">
                Tags
            </label>
            <div class="mt-2">
                <input name="tags" type="text" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg shadow-sm"
                    placeholder="e.g. cookie, chocolate, raisins, betrayal" value="{{ old('tags') }}">
            </div>
            @error('tags')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- content --}}
        <div class="pb-2">
            <label for="content">
                Content
            </label>
            <div class="mt-2">
                <textarea name="content" rows="10" required class="w-full border border-gray-300 px-4 py-4 rounded-lg shadow-sm"
                    placeholder="e.g. Your text">{{ old('content') }}</textarea>
            </div>
            @error('content')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
            class="text-white bg-slate-500 hover:bg-slate-600 focus:ring-4 font-medium rounded-lg text-sm px-4 py-2">Create</button>

    </form>
@endsection
