@extends('layouts.mainLayout')

@section('page_name') Modifica Comic {{ $comic->title }} | @endsection

@section('page_content')

<div class="container">
    <h2>Modifica il Comic: {{ $comic->title }}</h2>
    
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Titolo</label>
        <input
            type="text"
            id="title"
            name="title"
            value="{{ $comic->title }}"
            required
            maxlength="255"
            placeholder="Inserisci il titolo..."
        >
        
        <label for="description">Descrizione</label>
        <textarea
            id="description"
            name="description"
            cols="30" rows="10"
            placeholder="Inserisci una descrizione..."
        >
            {{ $comic->description }}
        </textarea>
        
        <label for="price">Prezzo</label>
        <input
            type=number
            step=0.01
            id="price"
            name="price"
            value="{{ $comic->price }}"
            required
            placeholder="0,00"
        >
        
        <label for="series">Serie</label>
        <input
            type="text"
            id="series"
            name="series"
            value="{{ $comic->series }}"
            required
            maxlength="255"
            placeholder="Inserisci il nome della serie..."
        >
        
        <label for="sale_date">Data di uscita</label>
        <input
            type="date"
            id="sale_date"
            name="sale_date"
            value="{{ $comic->sale_date }}"
            required
        >
        
        <label for="type">Tipologia</label>
        <select id="type" name="type" required>
            <option {{ isset($comic->type) || $comic->type == '' ? 'selected' : '' }} disabled>Seleziona ua tipologia</option>
            <option {{ $comic->type == 'comic book' ? 'selected' : ''}} value="comic book">Comic book</option>
            <option {{ $comic->type == 'graphic novel' ? 'selected' : ''}} value="graphic novel">Graphic novel</option>
        </select>
        <button type="submit">Modifica</button>
    </form>
    <a href="{{ route('comics.show', $comic->id) }}">Annulla</a>

</div>
    
@endsection