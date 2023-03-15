@extends('layouts.mainLayout')

@section('page_name') {{ $comic->title }} | @endsection

@section('page_content')
    <div class="container">
        <h2 class="mb-5 text-center">
            {{ $comic->title }}
        </h2>
        <div class="row">
            <div class="col-6 text-center">
                <img
                    src="{{ $comic->thumb }}"
                    alt="{{ $comic->title }}"
                    class="w-50 img-thumbnail"
                >
            </div>
            <div class="col-6">
                
                <a
                    href="{{ route('comics.edit', $comic->id) }}"
                    class="btn btn-secondary"
                >
                    <i class="fa-solid fa-pencil"></i>
                </a>
                <a
                    href="{{ route('comics.index') }}"
                    class="btn btn-warning text-light"
                >
                    <i class="fa-solid fa-rotate-left"></i>
                </a>
                <form
                action="{{ route('comics.destroy', $comic->id) }}"
                method="POST"
                onsubmit="confirmDelete()"
                class="d-inline"
            >
                @csrf
                @method('DELETE')
                <button
                    type="submit"
                    class="btn btn-danger"
                >
                    <i class="fa-solid fa-trash-can"></i>
                </button>
            </form>

                <ul class="list-group mt-3">
                    <li class="list-group-item">
                        <strong>Tipologia: </strong>{{ $comic->type }}
                    </li>
                    <li class="list-group-item">
                        <strong>Serie: </strong>{{ $comic->series }}
                    </li>
                    <li class="list-group-item">
                        <strong>Descrizione: </strong>
                        <p>{{ $comic->description }}</p>
                    </li>
                    <li class="list-group-item">
                        <strong>Prezzo: </strong>{{ number_format($comic->price, 2, ',', '.') }} €
                    </li>
                    <li class="list-group-item">
                        <strong>Data di pubblicazione: </strong>{{ $comic->sale_date }}
                    </li>
                  </ul>
            </div>
        </div>
    </div>
@endsection