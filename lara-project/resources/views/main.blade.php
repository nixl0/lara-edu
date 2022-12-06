@extends('base')



@section('title')
    Main
@endsection



@section('content')

    {{-- main title --}}
    <h1 class="text-slate-300 text-4xl font-black text-center p-5">Notes</h1>

    {{-- article --}}
    @if (count($articles) == 0)
        {{-- warning if no articles found --}}
        <p>no articles found</p>
    @else
        @foreach ($articles as $article)
        {{-- article --}}
        <a href="/article/{{ $article->id }}" class="cursor-pointer">
            <div class="bg-slate-100 p-5 mx-5 mt-5 rounded-2xl duration-200 hover:bg-slate-200">
                
                <h1 class="text-2xl font-bold mb-2">
                    {{ $article->title }}
                </h1>
                <p class="text-xs mb-5 opacity-40">
                    {{ $article->created_at }}
                </p>
                <p class="line-clamp-3">
                    {{ $article->content }}
                </p>
            </div>
        </a>
        @endforeach
    @endif

    

@endsection


