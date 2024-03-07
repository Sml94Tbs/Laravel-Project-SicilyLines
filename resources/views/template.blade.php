<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titre')</title>
    <link rel="icon" href="../images/ferry-sicile.gif">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="{{ asset('js/activation.js') }}" defer></script>
    <script src="{{ asset('js/alert.js') }}" defer></script>
    <style>
        /* body {
            background: url('images/712b17ee1a252090ffa4fb2f35bef366.jpg');
            min-height: 100vh;
            min-width: 100vw;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        } */
    </style>
</head>

<body>
    <h1 class="text-center @yield('class')">@yield('h1')</h1>
    @yield('contenu')
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

</body>

</html>
