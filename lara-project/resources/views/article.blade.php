@extends('base')



@section('title')
    {{ $article['title'] }}
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
        <div class="pb-5 flex">
            @foreach (explode(',', $article->tags) as $tag)
                <h5 class="bg-slate-100 p-2 mr-4 rounded-2xl">
                    {{ $tag }}
                </h5>
            @endforeach
        </div>
        <p class="pb-5">
            {{ $article->content }}
        </p>
    </div>
@endsection
