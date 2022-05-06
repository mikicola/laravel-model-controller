@extends('guest.template.base')
{{--
1   title = cosa sotituisco
2   laravel model-controller = cosa inserisco --}}
@section('title', 'Laravel model-controller')



@section('content')
    <main>
        <h1>Film</h1>
        <div class="cards-movies">
            @foreach ($movies as $movie)
            <div class="card-movie">
                <ul>
                    <li>Titolo: {{ $movie->title }}</li>
                    <li>Titolo Originale: {{ $movie->original_title }}</li>
                    <li>Nazionalità: {{ $movie->nationality }}</li>
                    <li>Data di Uscita: {{ $movie->date }}</li>
                    <li>Voto: {{ $movie->vote }}</li>
                </ul>
            </div>
            @endforeach
        </div>
    </main>
@endsection
