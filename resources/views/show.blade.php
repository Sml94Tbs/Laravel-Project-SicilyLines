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
    <section class="container">
        <h3>{{ $ferry->nom }}</h3>
        <img src="../images/{{ $ferry->photo }}" class="img-fluid rounded-5 m-4">
        <p>Longueur : {{ $ferry->longueur }} m</p>
        <p>Largeur : {{ $ferry->largeur }} m</p>
        <p>Vitesse : {{ $ferry->vitesse }} noeuds</p>
        <p><u>Liste des équipements</u></p>
        <ul>
            @foreach ($ferry->equipements as $equipement)
                <li>{{ $equipement->libelle }}</li>
            @endforeach
        </ul>
        <div class="d-flex justify-content-center">
            <a href="{{ url()->previous() }}" class="btn btn-info mb-2">Retour</a>
        </div>
    </section>
@endsection
