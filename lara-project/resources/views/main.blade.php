<h1>Notes</h1>

@if (count($articles) == 0)
    <p>no articles found</p>
@else
    @foreach ($articles as $article)
    <h3>
        <a href="/article/{{ $article['id'] }}">{{ $article['title'] }}</a>
    </h3>
    <p>
        {{ $article['content'] }}
    </p>
    @endforeach
@endif
