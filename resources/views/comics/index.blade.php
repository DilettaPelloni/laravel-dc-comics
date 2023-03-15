@extends('layouts.mainLayout')

@section('page_name') Home | @endsection

@section('page_content')
    <div class="container">
        <h2>Comics</h2>
        <div class="card-box">
            @foreach ($comics as $comic)
                <div class="card">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <h4>{{ $comic->title }}</h4>
                    <p>{{ $comic->price }}</p>
                    <p>{{ $comic->type }}</p>
                    <a href="{{ route('comics.show', $comic->id) }}">Dettagli</a>
                    <form
                        action="{{ route('comics.destroy', $comic->id) }}"
                        method="POST"
                        onsubmit="confirmDelete()"
                    >
                        @csrf
                        @method('DELETE')
                        <button type="submit">Elimina</button>
                    </form>
                </div>
            @endforeach

        </div>

        <a href="{{ route('comics.create') }}">Nuovo Comic</a>

    </div>
@endsection