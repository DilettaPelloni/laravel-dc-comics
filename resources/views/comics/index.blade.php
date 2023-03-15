@extends('layouts.mainLayout')

@section('page_name') Home | @endsection

@section('page_content')
    <div class="container">

        <a
            href="{{ route('comics.create') }}"
            class="mb-4 btn btn-info text-light"
        >
            Nuovo Comic
        </a>

        <h2>Comics</h2>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>{{ number_format($comic->price, 2, ',', '.') }} €</td>
                        <td>
                            <a
                                href="{{ route('comics.show', $comic->id) }}"
                                class="btn btn btn-info text-light"
                            >
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a
                                href="{{ route('comics.edit', $comic->id) }}"
                                class="btn btn-secondary"
                            >
                                <i class="fa-solid fa-pencil"></i>
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
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection