<h1>Aggiornamenti dati fumetto "{{ $comic->title }}"</h1>
<form action="{{route("comics.update",  $comic->id)}}" method="post">
    @csrf
    @method("PUT")
    <label for="inputTitle">Title</label>
    <input type="text" name="title" id="inputTitle" value="{{old("title") ?? $comic->title}}">
    <label for="inputDescription">Description</label>
    <input type="text" name="description" id="inputDescription" value="{{old("description") ?? $comic->description}}">
    <label for="inputThumb">Thumb</label>
    <input type="text" name="thumb" id="inputThumb" value="{{old("thumb") ?? $comic->thumb}}">
    <label for="inputPrice">Price</label>
    <input type="number" name="price" id="inputPrice" value="{{old("price") ?? $comic->price}}">
    <label for="inputSeries">Series</label>
    <input type="text" name="series" id="inputSeries" value="{{old("series") ?? $comic->series}}">
    <label for="inputSaleDate">Date</label>
    <input type="date" name="sale_date" id="inputSaleDate" value="{{old("sale_date") ?? $comic->sale_date}}">
    <label for="inputType">Type</label>
    <input type="text" name="type" id="inputType" value="{{old("type") ?? $comic->type}}">
    <button type="submit">Confirm</button>
</form>