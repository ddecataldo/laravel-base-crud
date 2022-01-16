<h1>Lista Fumetti</h1>
<ul>
@foreach ($comics as $singleComics)
    <li>{{ $singleComics->title }}</li>
@endforeach
</ul>