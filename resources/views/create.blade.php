    @extends('template')
    @section('titre')
        Sicily Lines - Les ferrys
    @endsection
    @section('h1')
        Création d'un ferry
    @endsection
    @section('class')
        text-info
    @endsection
    @section('contenu')
        <section class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="{{ route('ferry.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text"
                                class="form-control @error('nom')
                                is-invalid
                            @enderror"
                                name="nom" id="nom" placeholder="Nom du ferry" value="{{ old('nom') }}">
                            @error('nom')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="longueur" class="form-label">Longueur</label>
                            <input type="text"
                                class="form-control @error('longueur')
                                is-invalid
                            @enderror"
                                name="longueur" id="longueur" placeholder="Longueur en mètre"
                                value="{{ old('longueur') }}">
                            @error('longueur')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="largeur" class="form-label">Largeur</label>
                            <input type="text"
                                class="form-control @error('largeur')
                                is-invalid
                            @enderror"
                                name="largeur" id="largeur" placeholder="Largeur en mètre" value="{{ old('largeur') }}">
                            @error('largeur')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="vitesse" class="form-label">Vitesse</label>
                            <input type="text"
                                class="form-control @error('vitesse')
                                is-invalid
                            @enderror"
                                name="vitesse" id="vitesse" placeholder="Vitesse en noeuds" value="{{ old('vitesse') }}">
                            @error('vitesse')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Télécharger la photo</label>
                            <input type="file"
                                class="form-control @error('photo')
                                is-invalid
                            @enderror"
                                name="photo" id="photo" value="{{ old('photo') }}">
                            @error('photo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="equipement" class="form-label">Équipement : </label><br>
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($equipements as $equipement)
                                <input type="checkbox" name="equipement_id[]" id="cbox{{ $i++ }}"
                                    value="{{ $equipement->id }}">
                                {{ $equipement->libelle }} <br>
                            @endforeach
                        </div>
                        <div class="control">
                            <button class="btn btn-primary">Envoyer</button>
                        </div>

                    </form>
                    <div class="mb-3">
                        <a href="{{ route('ferry.index') }}" class="btn btn-danger">Retour</a>
                    </div>
                </div>
            </div>
        </section>
    @endsection
