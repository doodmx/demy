@extends('layouts.web.app')
@section('content')

    <div class="container-fluid main-padding">

        <!-- HEADER -->
        <div class="row justify-content-around align-items-center">
            <div class="col-12 col-lg-5 text-center text-lg-left">
                <h1 class="display-4 text-primary font-weight-bold wow fadeInLeft" data-wow-duration="1s"
                    data-wow-offset="30">
                    LAS OPORTUNIDADES NO PASAN,<b>LAS CREAS</b>
                </h1>
            </div>
            <div class="col-12 col-lg-5 mt-3 mt-lg-0">
                <img src="https://cdn.demy.mx/img/intro.jpg" alt="Academy" class="img-fluid wow fadeInRight"
                    data-wow-delay=".5s" data-wow-duration="1s" data-wow-offset="30">
            </div>
        </div>
        <!-- HEADER -->

        <!-- ABOUT US -->
        <section class="about-us mt-5">
            <div class="row justify-content-around">
                <div class="col-12 col-lg-5 wow zoomIn" data-wow-offset="20">
                    <h2 class="h1-responsive text-secondary font-weight-bold text-center text-lg-left">
                        VELTA STARTUP ACADEMY
                    </h2>

                    <p class="mt-3 text-grey lead text-justify">
                        Creamos cursos y talleres en temas relevantes como la creación de marcas, modelos de negocio,
                        estrategias comerciales, contables, legales así como tips reales probados con empresas existentes y
                        resultados inteligentes.
                    </p>
                </div>
                <div class="col-12 col-lg-5 mt-3 mt-lg-0 wow zoomIn" data-wow-delay=".5s" data-wow-offset="20">
                    <h2 class="h1-responsive text-secondary font-weight-bold text-center text-lg-left">
                        QUEREMOS TRANSMITIR
                    </h2>

                    <p class="mt-3 text-grey lead text-justify">
                        El conocimiento comercial y de negocios, muchos nos enseñan a llegar del 100 - 1000. El clásico
                        ejemplo de: Compra 4 departamentos, renta 3 y vive en 1.

                        Queremos llevar el conocimiento real de los ponentes a los jóvenes con intenciones de emprender y
                        desarrollarse en el mundo de los negocios de una forma accesible y para además crear una comunidad
                        de emprendedores reales y rentables.
                    </p>


                </div>
            </div>
        </section>

        <!-- ABOUT US -->

        <!-- OUR TEAM WORK -->
        <section class="our-team-work my-5">
            <h2 class="col-12 h1-responsive text-primary font-weight-bold text-center">
                NUESTRO EQUIPO DE TRABAJO
            </h2>


            <div class="team-content">

                @foreach (__('web/index')['members'] as $member)
                    <div class="team-card wow slideInUp" data-wow-offset="10">
                        <div class="content">
                            <h2 class="title mb-1">
                                {{ $member['name'] }}
                            </h2>

                            <p class="font-small mt-0">
                                {{ $member['velta_job'] }}
                            </p>

                            <blockquote class="blockquote text-justify">
                                <p class="mb-0"> {{ $member['mission'] }}</p>
                                <footer class="blockquote-footer text-white">{{ $member['quote'] }}</footer>
                            </blockquote>

                            <p class="font-weight-bold mt-1">
                                {{ $member['out_velta_job'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>



        </section>

        <!-- OUR TEAM WORK -->
    </div>



@endsection


@section('styles')
    <link rel="stylesheet" href="{{ asset(mix('css/web/index.css')) }}">
@endsection
