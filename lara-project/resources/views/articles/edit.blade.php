@extends('base')


@props(['article'])


@section('title')
    Edit
@endsection


@section('content')
    <form action="/articles/{{$article->id}}" method="POST" class="p-5" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- title --}}
        <div class="pb-2">
            <label for="title">
                Title
            </label>
            <div class="mt-2">
                <input name="title" type="text" required
                    class="w-full border border-gray-300 px-4 py-2 rounded-lg shadow-sm"
                    placeholder="e.g. My favorite chocolate cookies have raisins" value="{{ $article->title }}">
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
                    placeholder="e.g. Cookie commercial betrayal" value="{{ $article->slug }}">
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
                    placeholder="e.g. cookie, chocolate, raisins, betrayal" value="{{ $article->tags }}">
            </div>
            @error('tags')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- image --}}
        <div class="pb-2">
            <label for="image">
                Image
            </label>
            <div class="mt-2">
                <input name="image" type="file"
                    class="w-full">
                
                <div class="flex justify-center py-5">
                    @if ($article->image && !str_contains($article->image, 'https://'))
                        {{-- if field not empty and the path doesn't cointain 'https' --}}
                        <img src="{{ asset('storage/' . $article->image) }}" alt="" class="mb-2 rounded-2xl">
                    @else
                        {{-- if an internet link provided --}}
                        <img src="{{ $article->image }}" alt="" class="rounded-2xl">
                    @endif
                </div>

            </div>
            @error('image')
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
                    placeholder="e.g. Your text">{{ $article->content }}</textarea>
            </div>
            @error('content')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
            class="text-white bg-slate-500 hover:bg-slate-600 focus:ring-4 font-medium rounded-lg text-sm px-4 py-2 mr-2 transition duration-200">Edit</button>

    </form>
@endsection