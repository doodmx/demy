<!-- SUCCESS MESSAGE -->
@if(request()->session()->has('success_cart'))
    <div class="row no-gutters">
        <div class="col-12">
            <div class="alert alert-secondary-two lead" role="alert">
                {{session('success_cart')}}
            </div>
        </div>
    </div>
@endif
<!-- SUCCESS MESSAGE -->

<!-- ERROR MESSAGE -->
@if(request()->session()->has('error_cart'))
    <div class="row no-gutters">
        <div class="col-12">
            <div class="alert alert-primary lead" role="alert">
                {{session('error_cart')}}
            </div>
        </div>
    </div>
@endif
<!-- ERROR MESSAGE -->

<!--HEADER -->
<div id="header">
    <h1 class="h1-responsive text-primary font-weight-bold">
        {{__('cart.shopping_cart')}}
    </h1>
    <p class="text-secondary">
        {{__('cart.shopping_cart_copy')}}
    </p>
</div>
<!--HEADER-->

<!-- EMPTY CART -->
@if(empty($cart))
    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 400px;">
        <i class="fas fa-shopping-cart fa-5x text-primary"></i>
        <h3 class="h3-responsive text-primary font-weight-bold mt-3">
            {{__('cart.cart_is_empty')}}
        </h3>
    </div>
@endif
<!-- EMPTY CART -->



