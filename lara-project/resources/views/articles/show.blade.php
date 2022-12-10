@extends('base')

@props(['article'])

@section('title')
    {{ $article->title }}
@endsection

@section('content')
    <div class="m-5">
        <h1 class="text-2xl font-bold pb-2">
            {{ $article->title }}
        </h1>
        <h3 class="pb-5">
            {{ $article->slug }}
        </h3>
        <p class="pb-2 opacity-40">
            {{ $article->created_at }}
        </p>
        <x-tag :tagsCsv='$article->tags' />

        <div class="flex justify-center pb-5">
            @if ($article->image && !str_contains($article->image, 'https://'))
                {{-- if field not empty and the path doesn't cointain 'https' --}}
                <img src="{{ asset('storage/' . $article->image) }}" alt="" class="mb-2 rounded-2xl">
            @else
                {{-- if an internet link provided --}}
                <img src="{{ $article->image }}" alt="" class="mb-2 rounded-2xl">
            @endif
        </div>
        <p class="pb-5">
            {{ $article->content }}
        </p>
        {{-- buttons --}}
        <div class="mt-5 flex">
            <a href="/articles/{{ $article->id }}/edit">
                <button class="text-slate-500 border border-2 border-slate-300 hover:bg-slate-100 focus:ring-4 font-medium rounded-lg text-sm px-4 py-2 mr-3 transition duration-200">
                    <i class="fa-solid fa-pencil"></i>
                    Edit
                </button>
            </a>
            <a href="/articles/{{ $article->id }}/delete">
                <form method="POST" action="/articles/{{ $article->id }}" >
                    <button class="text-red-500 border border-2 border-red-300 hover:bg-red-100 focus:ring-4 font-medium rounded-lg text-sm px-4 py-2 mr-3 transition duration-200">
                        @csrf
                        @method('DELETE')
                        <i class="fa-solid fa-trash"></i>
                        Delete
                    </button>
                </form>
            </a>
        </div>
    </div>
@endsection