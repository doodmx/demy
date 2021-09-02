<nav class="navbar navbar-expand-lg scrolling-navbar navbar-light bg-white z-depth-0 fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ url('/') }}">

        <img src="https://cdn.demy.mx/img/logo.png" alt="Academy Logo" class="ml-3 d-inline-block"
             style="height:40px; object-fit: cover; object-position: center;">


    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto text-uppercase smooth-scroll align-items-lg-center">
            @include('layouts.web.menu')
        </ul>
    </div>

</nav>
