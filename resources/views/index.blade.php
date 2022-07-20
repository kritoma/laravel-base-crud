@extends('layouts.base')

@section('page_title')
    Fumetti
@endsection

@section('home_page')
    <div class="container">
        <h1>Fumetti</h1>

        <ul>
            @foreach ($comics as $comic)
                <li>
                    <h2>{{$comic->title}}</h2>
                    <p>{{$comic->description}}</p>
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                    <p>{{$comic->price}}</p>
                    <p>{{$comic->series}}</p>
                    <p>{{$comic->sale_date}}</p>

                    <a href="{{route('comics.edit', $comic->id)}}">Modifica</a>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Cancella</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
    


@endsection