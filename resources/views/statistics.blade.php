@extends('layouts.app')

@section('content')
    <section class="hero is-medium is-primary">
        <div class="hero-body has-text-centered">
            <br class="container">

                <h1 class="title is-size-6">
                    URL: {{$shortUrl->full_url}}
                </h1>
                </br>
                <h2 class="subtitle">
                    This URL has {{$shortUrlStatistics->clicks}} clicks
                </h2>

                <br>


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


