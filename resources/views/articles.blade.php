<x-layout>
@foreach ( $articles as $article )
    <div class="list-group">
        <a href="/articles/{{$article['slug']}}" class="list-group-item list-group-item-action active bg-dark border-white" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{{$article['title']}}</h5>
            <small>25/02/2025</small>
        </div>
        <p class="mb-1">Clicca qui per aprire l'articolo</p>
        <small>Questo elemento è stato creato con un foreach</small>
        </a>
    </div>
@endforeach
</x-layout>