@extends('layouts.mainLayout')

@section('page_name') {{ $comic->title }} | @endsection

@section('page_content')
    <div class="container">
        <h2>{{ $comic->title }}</h2>
        <div class="card-box">
            
                <div class="card">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <p>{{ $comic->type }}</p>
                    <p>{{ $comic->series }}</p>
                    <p>{{ $comic->description }}</p>
                    <p>{{ $comic->price }}</p>
                    <p>{{ $comic->sale_date }}</p>
                    <a href="{{ route('comics.index') }}">Torna alla home</a>
                </div>
            

        </div>
    </div>
@endsection