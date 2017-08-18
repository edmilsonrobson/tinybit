@extends('layouts.app')

@section('content')
    <section class="hero is-medium is-primary">
        <div class="hero-body has-text-centered">
            <div class="container">

                <h1 class="title is-size-1">
                    TINYBIT
                </h1>
                <h2 class="subtitle">
                    URL Shortener
                </h2>

                <br>

                @include('common.errors')
                <form action="/short-urls" method="POST">
                    {{ csrf_field() }}
                    <div class="columns is-centered">
                        <div class="column is-6">
                            <input name="full_url" class="input is-large" type="text" placeholder="Insert your long url here...">
                        </div>
                        <div class="column is-1">
                            <button type="submit" class="button is-large is-info">
                                Tinybit it!
                            </button>
                        </div>
                    </div>
                </form>

                @if(isset($short_url))
                    <div class="columns is-centered">
                        <div class="column is-5">
                            <p>Here's your short url: <b><a href="{{ URL::to('/' . $short_url->token) }}">{{ URL::to('/' . $short_url->token) }}</a></b></p>
                        </div>
                    </div>
                @endif

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
                    <p class="control">
                        <a class="button" target="_blank" href="https://github.com/edmilsonrobson/tinybit">
                          <span class="icon">
                            <i class="fa fa-github" aria-hidden="true"></i>
                          </span>
                            <span>Github</span>
                        </a>
                    </p>
                </div>
            </div>

        </div>
    </section>
@endsection