@extends('base')



@section('title')
    Main
@endsection



@section('content')

    {{-- search bar --}}
    @include('partials._search')

    @if (count($articles) == 0)
        {{-- warning if no articles found --}}
        <p class="mt-5">no articles found</p>
    @else
        @foreach ($articles as $article)
            <x-article :article='$article' />
        @endforeach
    @endif

    <div class="mt-6 p-4">
        {{ $articles->links() }}
    </div>

@endsection