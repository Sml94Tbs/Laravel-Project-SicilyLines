@extends('template')
@section('titre')
    Sicily Lines - Les ferrys
@endsection
@section('h1')
    Les ferrys
@endsection
@section('class')
    text-info
@endsection
@section('contenu')
    @if (session()->has('info'))
        <div class="alert alert-info alert-dismissible fade show js-alert" role="alert">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <section class="container">
        <div class="d-flex justify-content-center ">
            <a class="btn btn-info m-2" href="{{ route('ferry.create') }}">Ajouter un ferry</a>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <table class="table table-borderless">
                    <thead class="table-info">
                        <tr>
                            <th>Nom</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @foreach ($ferrys as $ferry)
                            <tr>
                                <td>{{ $ferry->nom }}</td>
                                <td><a class="btn btn-success" href="{{ route('ferry.show', $ferry->id) }}">Voir</a></td>
                                <td><a class="btn btn-warning" href="{{ route('ferry.edit', $ferry->id) }}">Modifier</a>
                                </td>
                                <td>
                                    <form action="{{ route('ferry.destroy', $ferry->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ route('pdf') }}" class="btn btn-outline-info">Générer un PDF</a>
            </div>
            <div class="d-flex justify-content-center m-2">
                <a href="/" class="btn btn-danger">Retour à l'accueil</a>
            </div>
        </div>
    </section>
@endsection
