@extends('layouts.app')

@section('main-content')
    <section id='movies-list'>
        <div class="my_container my_d-flex my_column my_align-center my_justify-center">
            <h2 class="my_text-uppercase my_title">Movies List</h2>
            
            <div class="my_cards-container my_d-flex my_wrap my_justify-center">
                @forelse ($movies as $movie)
                    <article class="my_card my_text-center" title="Titolo Originale :{{$movie->original_title}}">
                        <h3>{{$movie->title}}</h3>
                        <ul>
                            <li>Lingua : {{Ucwords($movie->nationality)}}</li>
                            <li>{{str_ireplace('-' , '/',$movie->date)}}</li>
                            <li>{{$movie->vote}}</li>
                        </ul>
                    </article>
                @empty
                    <p>La lista è vuota</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection