<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des ferrys</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        html {
            font-size: 62.5%;
            padding: 2rem;
        }

        h1 {
            font-size: 3.2rem;
        }

        h2 {
            font-size: 2.4rem;
        }

        h3 {
            font-size: 1.872rem
        }

        p {
            font-size: 1.4rem
        }

        ul {
            font-size: 1.4rem
        }

        .center {
            display: flex;
            text-align: center;
        }

        img {
            max-width: 100vw;
        }

        .container {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            width: 100%;
            padding-right: calc(var(--bs-gutter-x) * .5);
            padding-left: calc(var(--bs-gutter-x) * .5);
            margin-right: auto;
            margin-left: auto;
        }

        .container.space {
            margin-bottom: 50%
        }
    </style>
</head>

<body>
    <h1 class="center">{{ $titre }}</h1>
    <h3 class="center">{{ $date }}</h3>
    <hr />
    @foreach ($ferrys as $ferry)
        <section class="container space">
            <h2 class="center">{{ $ferry->nom }}</h2>
            <div class="d-flex justify-content-center">
                <img src="images/{{ $ferry->photo }}">
            </div>
            <p>Longueur : {{ $ferry->longueur }} m</p>
            <p>Largeur : {{ $ferry->largeur }} m</p>
            <p>Vitesse : {{ $ferry->vitesse }} noeuds</p>
            <p><u>Liste des équipements</u></p>
            <ul>
                @foreach ($ferry->equipements as $equipement)
                    <li>{{ $equipement->libelle }}</li>
                @endforeach
            </ul>
        </section>
    @endforeach
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
