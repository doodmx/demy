<!--PAYMENT-->
<div class="col-12 col-lg-8">
    <h3 class="h3-responsive text-primary font-weight-bold">
        {{__('cart.options')}}
    </h3>

    <ul class="nav md-tabs bg-primary nav-justified mt-3 mx-0">
        <li class="nav-item waves-effect waves-light">
            <a class="nav-link active" data-toggle="tab" href="#card" role="tab">Tarjeta
                Crédito/Débito</a>
        </li>

        {{--
        <li class="nav-item waves-effect waves-light">
            <a class="nav-link" data-toggle="tab" href="#ppal"
               role="tab">Paypal</a>
        </li>
        --}}


    </ul>

    <div class="tab-content" id="pills-tabContent">

        <!-- CREDIT CARD -->
        <div class="tab-pane fade show active" id="card" role="tabpanel"
             aria-labelledby="card-tab">
            @include('_partials.cart.credit_card')

        </div>
        <!-- END CREDIT CARD -->

        <!-- PAYPAL OPTION -->
        <div class="tab-pane fade" id="ppal" role="tabpanel"
             aria-labelledby="ppal-tab">

            <input type="hidden"
                   id="ppalCurrency"
                   value="{{$cart['items'][0]['currency_code']}}"
            />
            <input type="hidden"
                   id="ppalCurrencyId"
                   value="{{$cart['items'][0]['currency_id']}}"
            />
            <input type="hidden"
                   id="ppalStatus"
                   value="paid"
            />
            <input type="hidden"
                   id="ppalAmount"
                   value="{{$cart['totals']['total']}}"
            />
            <input type="hidden"
                   id="ppalDescription"
                   value="{{__('cart.cart_concept').' '.implode(',',array_column($cart['items'],'description'))}}"
            />

            <div id="ppal-button-container"></div>
        </div>
        <!-- END PAYPAL OPTION -->


    </div>


</div>
<!--PAYMENT -->
