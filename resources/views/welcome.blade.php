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

<section class="hero is-medium is-primary">
    <div class="hero-body has-text-centered">
        <div class="container">

            <h1 class="title is-size-1">
                Tinybit
            </h1>
            <h2 class="subtitle">
                URL Shortener
            </h2>

            <br>

            <div class="columns is-centered">
                <div class="column is-6">
                    <input class="input is-large" type="text" placeholder="Shorten your url here...">
                </div>
                <div class="column is-1">
                    <button class="button is-large is-info">
                        Tinybit it!
                    </button>
                </div>
            </div>
            <br>
            <div class="columns is-centered">
                <div class="column is-5">
                    <p class="is-size-4"><i>"Do not worry if you have built your castles in the air. They are where they should be. Now put the foundations under them."</i></p>
                    <p class="is-size-5 is-pulled-right">—— <b>Henry David Thoreau</b></p>
                </div>
            </div>

        </div>
        <br>
        <div class="container">
            <div class="columns is-centered">
                <a class="button" href="https://github.com/jgthms/bulma/archive/0.5.1.zip">
                  <span class="icon">
                    <i class="fa fa-github" aria-hidden="true"></i>
                  </span>
                    <span>Github</span>
                </a>
            </div>
        </div>
    </div>
</section>

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
</body>
</html>

