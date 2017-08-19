<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tinybit</title>
    <link href="/css/app.css" rel="stylesheet" type="text/css">

</head>

<body>

@include('components.navbar')

@yield('content')

<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            <p>
                <strong>Tinybit</strong> by <a href="https://github.com/edmilsonrobson/">Edmilson Rocha</a>
                and <a href="https://github.com/liviolima">Lívio Lima</a> with <span class="has-text-danger">♥</span>.
            </p>
            <p>
                The source code is licensed <a href="http://opensource.org/licenses/mit-license.php">MIT</a>.
                <br>
                The website content is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC ANS 4.0</a>.
            </p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>

