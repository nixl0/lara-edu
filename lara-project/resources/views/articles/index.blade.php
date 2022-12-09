@extends('base')



@section('title')
    Main
@endsection



@section('content')

    {{-- main title --}}
    <h1 class="text-slate-300 text-4xl font-black text-center p-5">Notes</h1>

    {{-- search bar --}}
    @include('partials._search')

    @if (count($articles) == 0)
        {{-- warning if no articles found --}}
        <p>no articles found</p>
    @else
        @foreach ($articles as $article)
            <x-article :article='$article' />
        @endforeach
    @endif

    

@endsection