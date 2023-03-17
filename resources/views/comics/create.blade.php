@extends('layouts.mainLayout')

@section('page_name') Nuovo Comic | @endsection

@section('page_content')

<div class="container">
    <h2>Nuovo articolo</h2>
    
    <form action="{{ route('comics.store') }}" method="POST" class="mt-5 mx-auto w-75">
        @csrf

        <div class="row mb-3">
            <label for="title" class="col-2 col-form-label fw-bold">Titolo*</label>
            <div class="col-10">
                <input
                    type="text"
                    class="form-control"
                    id="title"
                    name="title"
                    required
                    maxlength="255"
                    placeholder="Inserisci il titolo..."
                >
            </div>
        </div>
        <div class="row mb-3">
            <label for="thumb" class="col-2 col-form-label fw-bold">Immagine</label>
            <div class="col-10">
                <input
                    type="text"
                    class="form-control"
                    id="thumb"
                    name="thumb"
                    maxlength="255"
                    placeholder="Inserisci il link..."
                >
            </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="col-2 col-form-label fw-bold">Descrizione</label>
            <div class="col-10">
                <textarea
                    id="description"
                    class="form-control"
                    name="description"
                    rows="6"
                    placeholder="Inserisci una descrizione..."
                ></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="price" class="col-2 col-form-label fw-bold">Prezzo (€)*</label>
            <div class="col-10">
                <input
                    type=number
                    class="form-control"
                    step=0.01
                    id="price"
                    name="price"
                    required
                    min="0.01"
                    placeholder="0,00"
                >
            </div>
        </div>
        <div class="row mb-3">
            <label for="series" class="col-2 col-form-label fw-bold">Serie*</label>
            <div class="col-10">
                <input
                    type="text"
                    class="form-control"
                    id="series"
                    name="series"
                    required
                    maxlength="255"
                    placeholder="Inserisci il nome della serie..."
                >
            </div>
        </div>
        <div class="row mb-3">
            <label for="sale_date" class="col-2 col-form-label fw-bold">Data di uscita*</label>
            <div class="col-10">
                <input
                    type="date"
                    class="form-control"
                    id="sale_date"
                    name="sale_date"
                    required
                >
            </div>
        </div>
        <div class="row mb-3">
            <label for="type" class="col-2 col-form-label fw-bold">Tipologia*</label>
            <div class="col-10">
                <select id="type" class="form-select" name="type" required>
                    <option selected disabled>Seleziona una tipologia</option>
                    <option value="comic book">Comic book</option>
                    <option value="graphic novel">Graphic novel</option>
                </select>
            </div>
        </div>

        <div class="mt-5 text-end">
            <a
                href="{{ route('comics.index') }}"
                class="btn btn-warning text-light"
            >
                <i class="fa-solid fa-rotate-left"></i> 
            </a>
            <button type="submit" class="btn btn-success">
                <i class="fa-solid fa-check"></i>
            </button>
        </div>
    </form>
</div>
    
@endsection