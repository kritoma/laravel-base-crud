@extends('layouts.base')

@section('page_title')
    modifica fumetti
@endsection

@section('home_page')
    <h1>Modifica il fumetto</h1>
    <form action="{{route('Comic.update', $comic->id )}}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Titolo</label>
        <input class="form-control" type="text" id="title" name="title" value="{{$comic->title}}">

        <label for="description">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{$comic->description}}</textarea>
    
        <label for="thumb">Immagine</label>
        <input type="text" id="thumb" name="thumb" value="{{$comic->thumb}}">

        <label for="price">Prezzo</label>
        <input type="number" name="price" id="price" value="{{$comic->price}}">

        <label for="series">Serie</label>
        <input type="text" id="series" name="series" value="{{$comic->series}}">

        <label for="sale_date">Data pubblicazione</label>
        <input type="text" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">

        <button type="submit">Modifica</button>
    </form>
@endsection