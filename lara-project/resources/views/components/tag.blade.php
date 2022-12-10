@props(['tagsCsv'])

<div class="pb-5 flex">
    @foreach (explode(',', $tagsCsv) as $tag)
        <a href="/?tag={{$tag}}">
            <h5 class="bg-slate-100 p-2 mr-4 rounded-2xl transition duration-200 hover:bg-slate-200">
                {{ $tag }}
            </h5>
        </a>
    @endforeach
</div>