@extends('layouts.web.app',['removeFooter' =>true])



@section('content')

    <div class="filter d-lg-none shadow-sm bg-white p-2">
        <button class="btn btn-grey btn-block"
                data-toggle="collapse"
                href="#courses-filter"
                role="button"
                aria-expanded="false"
                aria-controls="courses-filter">
            <i class="fas fa-filter mr-2"></i>Filtrar
        </button>
        @include('_partials.course.filter',['id'=>'courses-filter','isCollapse'=>true])

    </div>


    <div class="d-flex flex-column flex-1 courses-container">

        <div class="d-flex flex-1 justify-content-between" style="overflow-y: hidden;">
            <!-- FILTER -->
            <div class="d-none d-lg-block col-lg-3 col-xl-2 border border-right shadow-sm">
                @include('_partials.course.filter',['id'=>null,'isCollapse'=>false])
            </div>
            <!--FILTER -->

            <!-- COURSES LIST -->
            <div class="col-12 col-lg-9 col-xl-10 p-lg-5" style="overflow-x:hidden;">

                <h2 class="h2-responsive text-primary font-weight-bold">Cursos</h2>
                <div class="row wrap">


                    @foreach($courses as $course)
                        <div class="col-12 col-sm-6 col-xl-4 my-3">
                            @include('_partials/course/card',[
                                'course'=>$course,
                                'rate' => $course->average_rate,
                                'progress' => null,
                                'route' =>route('web.courses.show',$course->seo->slug)
                            ])
                        </div>
                    @endforeach
                </div>

                {{ $courses->links() }}

            </div>
            <!-- COURSES LIST -->
        </div>

    </div>


@endsection

@section('styles')
    <link rel="stylesheet" href="{{asset(mix('css/web/course/index.css'))}}">

@endsection

@section('scripts')
    <script src="{{ asset(mix('js/web/course/index.js')) }}"></script>
@endsection
