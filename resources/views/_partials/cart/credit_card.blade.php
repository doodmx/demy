{{ Form::open([
    'id' => 'cartForm',
    'data-stripe-publishable-key' => env('APP_ENV') === 'local' ? env('STRIPE_TEST_KEY') : env('STRIPE_KEY'),
    'data-parsley-validate' => true,
    'autocomplete' => 'off',
]) }}



<div class="row wrap justify-content-between align-items-center">

    <div class="text-center text-md-left flex-grow-1 col-12 col-lg-8">
        <p>{{ __('cart.accepted_cards') }}</p>
    </div>
    <div class="col-12 col-lg-4 mt-2 mt-lg-0">
        <img class="img-fluid" src="https://cdn.demy.mx/img/stripe.jpg">
    </div>
</div>




{{ Form::hidden('paymentToken', null) }}
{{ Form::hidden('description', __('cart.cart_concept') . ' ' . implode(',', array_column($cart['items'], 'description'))) }}
{{ Form::hidden('currency_id', $cart['items'][0]['currency_id']) }}
{{ Form::hidden('currency_code', $cart['items'][0]['currency_code']) }}
{{ Form::hidden('payment_method', 'stripe_credit_card') }}
{{ Form::hidden('amount', $cart['totals']['total']) }}
{{ Form::hidden('status', 'paid') }}
{{ Form::hidden('saveCustomer') }}


<div id="card-element" class="my-5">
    <!-- Elements will create input elements here -->
</div>

<!-- We'll put the error messages in this element -->
<div id="card-errors" class="text-danger"></div>


<div class="md-form text-charcoal mt-4">
    <input class="form-check-input" type="checkbox" id="termsCheck" name="terms" data-parsley-required="true" required>
    <label class="form-check-label font-weight-bold lead" for="termsCheck">

        <a href="{{ route('terms') }}" target="_blank">
            {{ __('cart.terms') }}
        </a>
    </label>
</div>

<button type="button" id="btnCheckout" class="btn btn-block btn-primary btn-rounded mt-5">
    {{ __('cart.pay') }}
</button>

{{ Form::close() }}
