
<div class="container-fluid">
    <footer class="text-center text-md-left text-secondary">

        <div class="px-3 px-lg-5">
            <!--Grid row-->
            <div class="row py-4 d-flex align-items-center">
                <!--Grid column-->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-md-0">
                    <h6 class="mb-0 ">
                        {{__('web/index.rrss')}}
                    </h6>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-md-6 col-lg-7 text-center text-md-right mt-3 mt-lg-0">

                    @foreach(config('social') as $social)
                        <a class="p-2 m-2 fa-lg fb-ic"
                           href="{{$social['url']}}"
                           target="_blank">
                            <i class="{{$social['icon']}} text-primary mr-lg-4"> </i>
                        </a>
                    @endforeach

                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->

            <!-- Grid row -->
            <div class="row wrap flex-column flex-sm-row justify-content-between align-items-center py-3 border-top border-primary">

                <div class="font-weight-bold text-center text-sm-left">

                    <div class="d-block d-inline-lg-block">© {{date('Y')}} {{__('web/index.rights')}}</div>

                    <a href="{{route('policies')}}"
                       class="d-block d-inline-lg-block text-secondary font-weight-bold ml-2">
                        {!! __('web/footer.privacy_policy') !!}
                    </a>

                    <a href="{{route('terms')}}" class="d-block d-inline-lg-block text-secondary font-weight-bold ml-2">
                        {!! __('web/footer.terms_of_use') !!}
                    </a>
                </div>

            </div>
            <!-- Grid row -->

        </div>

        <!--Grid row-->
        <div class="row" style="height: 20px">
            <div class="col-6 bg-primary"></div>
            <div class="col-6 bg-secondary"></div>
        </div>
        <!--Grid row -->

    </footer>

</div>



