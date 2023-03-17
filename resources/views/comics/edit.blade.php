@extends('layouts.mainLayout')

@section('page_name') Modifica Comic {{ $comic->title }} | @endsection

@section('page_content')

<div class="container">
    <h2 class="mb-5">Sezione di modifica</h2>
    <h4 class="text-center">Articolo: {{ $comic->title }}</h4>
    
    <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="mt-4 mx-auto w-75">
        @csrf
        @method('PUT')

        <div class="row mb-3">
            <label for="title" class="col-2 col-form-label fw-bold">Titolo</label>
            <div class="col-10">
                <input
                    type="text"
                    class="form-control @error ('title') is-invalid @enderror"
                    id="title"
                    name="title"
                    value="{{ old('title') ?? $comic->title }}"
                    required
                    maxlength="255"
                    placeholder="Inserisci il titolo..."
                >
                @error('title')
                    <span class="d-block mt-2 text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="col-2 col-form-label fw-bold">Descrizione</label>
            <div class="col-10">
                <textarea
                    class="form-control @error ('description') is-invalid @enderror"
                    rows="6"
                    id="description"
                    name="description"
                    placeholder="Inserisci una descrizione..."
                >{{ old('description') ?? $comic->description }}</textarea>
                @error('description')
                    <span class="d-block mt-2 text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="price" class="col-2 col-form-label fw-bold">Prezzo (€)</label>
            <div class="col-10">
                <input
                    type=number
                    step=0.01
                    class="form-control @error ('price') is-invalid @enderror"
                    id="price"
                    name="price"
                    value="{{ old('price') ?? $comic->price }}"
                    required
                    min="0.01"
                    max="9999.99"
                    placeholder="0,00"
                >
                @error('price')
                    <span class="d-block mt-2 text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="series" class="col-2 col-form-label fw-bold">Serie</label>
            <div class="col-10">
                <input
                    type="text"
                    class="form-control @error ('series') is-invalid @enderror"
                    id="series"
                    name="series"
                    value="{{ old('series') ?? $comic->series }}"
                    required
                    maxlength="255"
                    placeholder="Inserisci il nome della serie..."
                >
                @error('series')
                    <span class="d-block mt-2 text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="sale_date" class="col-2 col-form-label fw-bold">Data di pubblicazione</label>
            <div class="col-10">
                <input
                    type="date"
                    class="form-control @error ('sale_date') is-invalid @enderror"
                    id="sale_date"
                    name="sale_date"
                    value="{{ old('sale_date') ?? $comic->sale_date }}"
                    required
                >
                @error('sale_date')
                    <span class="d-block mt-2 text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="type" class="col-2 col-form-label fw-bold">Tipologia</label>
            <div class="col-10">
                <select
                    id="type"
                    class="form-select @error ('type') is-invalid @enderror"
                    name="type"
                    required
                    >
                    <option {{ !isset($comic->type) || $comic->type == '' ? 'selected' : '' }} disabled>Seleziona ua tipologia</option>
                    <option {{ (old('type') ?? $comic->type) == 'comic book' ? 'selected' : ''}} value="comic book">Comic book</option>
                    <option {{ (old('type') ?? $comic->type) == 'graphic novel' ? 'selected' : ''}} value="graphic novel">Graphic novel</option>
                </select>
                @error('type')
                    <span class="d-block mt-2 text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="mt-5 text-end">
            <a
                href="{{ route('comics.show', $comic->id) }}"
                class="btn btn-warning text-light"
            >
                <i class="fa-solid fa-rotate-left"></i>
            </a>
            <button class="btn btn-success" type="submit">
                <i class="fa-solid fa-check"></i>
            </button>
        </div>
    </form>
</div>
    
@endsection