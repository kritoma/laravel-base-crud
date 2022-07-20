@extends('layouts.base')

@section('page_title')
    aggiunta fumetti
@endsection

@section('home_page')
    <h1>Inserire un fumetto</h1>
    <form action="{{route('comics.store')}}" method="post">
        @csrf

        <label for="title">Titolo</label>
        <input class="form-control" type="text" id="title" name="title">

        <label for="description">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    
        <label for="thumb">Immagine</label>
        <input type="text" id="thumb" name="thumb">

        <label for="price">Prezzo</label>
        <input type="number" name="price" id="price">

        <label for="series">Serie</label>
        <input type="text" id="series" name="series">

        <label for="sale_date">Data pubblicazione</label>
        <input type="text" name="sale_date" id="sale_date">

        <button type="submit">Aggiungi</button>
    </form>
@endsection