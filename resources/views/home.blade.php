@extends('layouts.app')

@section('main-content')
    <section id='movies-list'>
        <div class="my_container my_d-flex my_column my_align-center my_justify-center">
            <h2 class="my_text-uppercase my_title">Movies List</h2>
            
            <div class="my_cards-container my_d-flex my_wrap my_justify-center">
                @forelse ($movies as $movie)
                    <article class="my_card my_text-center" title="Titolo Originale :{{$movie->original_title}}">
                        <a href="{{route(Request::route()->getName()) . '/' . $loop->iteration}}">
                            <h3>{{$movie->title}}</h3>
                            <ul>
                                <li>Lingua:{{$movie->stringFirstLetterToUppecase($movie->nationality)}}</li>

                                <li>Data di uscità:{{$movie->replaceElementInString('-','/',$movie->date)}}</li>
                                <li>Voto:{{$movie->vote}}</li>
                            </ul>
                        </a>
                    </article>
                @empty
                    <p>La lista è vuota</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection