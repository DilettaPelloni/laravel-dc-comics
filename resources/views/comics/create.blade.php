@extends('layouts.mainLayout')

@section('page_name') Nuovo Comic | @endsection

@section('page_content')

<div class="container">
    <h2>Nuovo Comic</h2>
    
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <label for="title">Titolo</label>
        <input type="text" id="title" name="title" required maxlength="255" placeholder="Inserisci il titolo...">
        
        <label for="thumb">Immagine</label>
        <input type="text" id="thumb" name="thumb" maxlength="255" placeholder="Inserisci il link...">
        
        <label for="description">Descrizione</label>
        <textarea id="description" name="description" cols="30" rows="10" placeholder="Inserisci una descrizione..."></textarea>
        
        <label for="price">Prezzo</label>
        <input type=number step=0.01 id="price" name="price" required placeholder="0,00">
        
        <label for="series">Serie</label>
        <input type="text" id="series" name="series" required maxlength="255" placeholder="Inserisci il nome della serie...">
        
        <label for="sale_date">Data di uscita</label>
        <input type="date" id="sale_date" name="sale_date"required>
        
        <label for="type">Tipologia</label>
        <select id="type" name="type" required>
            <option selected disabled>Seleziona ua tipologia</option>
            <option value="comic book">Comic book</option>
            <option value="graphic novel">Graphic novel</option>
        </select>
        <button type="submit">Crea</button>
    </form>

    <a href="{{ route('comics.index') }}">Torna alla home</a>

</div>
    
@endsection