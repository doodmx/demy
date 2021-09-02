@extends('layouts.web.app')


@section('content')

    <div class="container main-padding mb-5">

        @include('_partials.cart.header')
        @include('_partials.cart.items')

        @if(isset($cart['totals']))
            <div class="row justify-content-between align-items-center mt-5">
                @include('_partials.cart.totals')
                @include('_partials.cart.payment_options')
            </div>
        @endif


    </div>




@endsection


@section('styles')

    {{Html::style(asset(mix('css/web/cart.css')))}}

@endsection



@section('scripts')

    @if(isset($cart))
        {{ Html::script('https://js.stripe.com/v3/') }}
        <script src="https://www.paypal.com/sdk/js?client-id={{env('APP_ENV') === 'local' ? env('PAYPAL_TEST_CLIENT') : env('PAYPAL_CLIENT')}}"></script>
        {{Html::script(asset(mix('js/web/cart/app.js')))}}
    @endif
@endsection

