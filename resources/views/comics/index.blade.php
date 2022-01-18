<h1>Lista Fumetti</h1>
<ul>
@foreach ($comic as $singleComics)
    <li>
        {{ $singleComics->title }} - 
        <a href="{{ route('comics.show', $singleComics->id) }}"> Vedi i dettagli </a> -
        <a href="{{ route('comics.edit', $singleComics->id) }}"> Modifica </a>
    </li>
@endforeach
</ul>