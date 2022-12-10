@props(['article'])

<a href="/articles/{{ $article->id }}" class="cursor-pointer">
    <div class="bg-slate-100 p-5 mx-5 mt-5 rounded-2xl transition duration-200 hover:bg-slate-200">
        
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