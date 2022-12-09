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
        <p class="pb-5">
            {{ $article->content }}
        </p>
    </div>
@endsection