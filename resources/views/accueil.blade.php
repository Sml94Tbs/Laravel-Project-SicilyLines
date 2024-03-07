@extends('template')
@section('titre')
    Sicily Lines - Les ferrys
@endsection
@section('h1')
    Sicily Lines
@endsection
@section('class')
    text-success
@endsection
@section('contenu')
    <section class="container">
        <div class="d-flex justify-content-center">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-fluid rounded-5 d-block w-100" src="../images/flashDiapo02.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid rounded-5 d-block w-100" src="../images/flashDiapo01.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid rounded-5 d-block w-100" src="../images/flashDiapo03.jpg">
                    </div>
                </div>

            </div>

        </div>
        <div class="d-flex justify-content-center">
            <a href="ferry" class="btn btn-outline-success m-5">Voir les bateaux</a>
        </div>
    </section>
@endsection
