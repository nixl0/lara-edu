@props(['article'])

<a href="/articles/{{ $article->id }}" class="cursor-pointer">
    <div class="bg-slate-100 p-5 mx-5 mt-5 rounded-2xl transition duration-200 hover:bg-slate-200">
        
        {{-- image --}}
        <div class="flex justify-center">
            @if ($article->image && !str_contains($article->image, 'https://'))
                {{-- if field not empty and the path doesn't cointain 'https' --}}
                <img src="{{ asset('storage/' . $article->image) }}" alt="" class="mb-2 rounded-2xl max-h-60">
            @else
                {{-- if an internet link provided --}}
                <img src="{{ $article->image }}" alt="" class="mb-2 rounded-2xl max-h-60">
            @endif
        </div>

        {{-- title --}}
        <h1 class="text-2xl font-bold mb-2">
            {{ $article->title }}
        </h1>

        {{-- date --}}
        <p class="text-xs mb-5 opacity-40">
            {{ $article->created_at }}
        </p>

        {{-- content --}}
        <p class="line-clamp-3">
            {{ $article->content }}
        </p>
    </div>
</a>