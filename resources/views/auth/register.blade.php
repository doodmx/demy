@extends('layouts.web.app')




@section('content')
    <div class="main-padding d-flex justify-content-center align-items-center mb-5">

        <div class="container-fluid p-5">



            <div class="row align-items-center justify-content-between register">

                <!-- LEAD TEXT -->
                <div class="col-12 col-lg-6 text-center text-md-left lead-container p-3">

                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10 text-center">

                                <img src="https://cdn.demy.mx/img/intro.jpg" class="img-fluid text-center" width="450px"
                                     alt="Forma parte de nuestro equipo.">

                            <h1 class="text-primary font-weight-bold wow fadeInLeft mt-3" data-wow-delay=".3s">
                                {!! __('web/register.title') !!}
                            </h1>
                        </div>
                    </div>



                </div>
                <!-- END LEAD TEXT -->

                <!-- REGISTER FORM -->
                <div class="col-12 col-lg-5 mt-5 mt-lg-0 px-0 px-sm-5">

                    <div class="card shadow-md white-text">
                        <div class="card-body py-5 px-4 px-sm-5">

                            @if(session()->has('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{session('error')}}
                                </div>
                            @endif

                            <div id="leadInfo"
                                 data-sent="{{session()->has('success')}}"
                                 data-lead="{{session()->has('lead') ? session()->get('lead'): null}}">
                            </div>

                            {{Form::open(['url' => route('register'),'id'=>'leadForm','class'=>'register-form'] )}}
                            @csrf
                            @if(!auth()->check())
                                <h3 class="text-center text-primary">
                                    {!! __('web/forms.register.title') !!}
                                </h3>
                            @else
                                <h3 class="text-center text-secondary">
                                        <span class="d-block">
                                              {!! __('web/forms.register.copy') !!}
                                        </span>
                                </h3>
                            @endif
                            @include('_partials/register/fields')

                            <button type="button"
                                    class="btn btn-primary btn-lg btn-block font-weight-bold waves-effect mt-5">
                                {!! __('web/forms.register.action') !!}
                            </button>
                            {{Form::close()}}
                        </div>
                    </div>
                </div>
                <!-- END REGISTER FORM -->
            </div>
        </div>
    </div>
    @include('auth.modals.terms')
@endsection


@section('styles')
    {{Html::style(asset(mix('css/web/register.css')))}}
@endsection

@section('scripts')
    {{Html::script(asset(mix('js/web/register/app.js')))}}
@endsection

