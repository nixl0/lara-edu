<h1>
    {{ $article['title'] }}
</h1>
<p>
    {{ $article['created_at'] }}
</p>
<h3><i>
    {{ $article['slug'] }}
</i></h3>
@foreach (explode(',', $article['tags']) as $tag)
    <h5><b>
        {{ $tag }}
    </b></h5>
@endforeach
<p>
    {{ $article['content'] }}
</p>