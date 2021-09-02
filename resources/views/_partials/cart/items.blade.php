@if(isset($cart['items']))

    <!-- TABLE HEADER -->
    <div class="row wrap bg-primary text-white p-3 lead rounded d-none d-lg-flex">
        <div class="col-lg-2"> {{__('cart.thumbnail')}}</div>
        <div class="col-lg-10  d-flex row no-gutters">
            <div class="col-lg"> {{__('cart.item')}}</div>
            <div class="col-lg-2 text-center"> {{__('cart.price')}}</div>
            <div class="col-lg-2 text-center"> {{__('cart.quantity')}}</div>
            <div class="col-lg-2 text-center"> {{__('cart.total')}}</div>
            <div class="col-lg-1 text-center">-</div>
        </div>
    </div>
    <!-- TABLE HEADER -->

    <!-- TABLE ITEMS -->
    @foreach($cart['items'] as $cartItem)

        <div
            class="row wrap justify-content-between align-items-center lead text-center mt-5 mt-lg-3 item">

            <div class="col-12 col-lg-2">
                <img class="avatar shadow"
                     src="{{asset($cartItem['thumbnail'])}}" alt=""
                >
            </div>

            <div class="totals col-12 col-lg-10 d-flex row no-gutters mt-5 mt-lg-0 text-secondary-two">

                <div class="col-12 col-lg total-item text-center text-lg-left">
                    <div class="title d-lg-none font-weight-bold">{{__('cart.item')}}</div>
                    <div> {{$cartItem['description']}}</div>
                </div>

                <div class="col-12 col-lg-2 total-item mt-3 mt-lg-0">
                    <div class="title d-lg-none font-weight-bold">{{__('cart.price')}}</div>
                    <div> {{number_format($cartItem['price'],2)}}</div>


                </div>
                <div class="col-12 col-lg-2  total-item mt-3 mt-lg-0 ">
                    <div class="title d-lg-none font-weight-bold">{{__('cart.quantity')}}</div>
                    {{number_format($cartItem['quantity'],2)}}
                </div>
                <div class="col-12 col-lg-2  total-item mt-3 mt-lg-0">
                    <div class="title d-lg-none font-weight-bold">{{__('cart.total')}}</div>
                    {{$cartItem['subtotal']}}
                </div>
                <div class="col-12 col-lg-1 total-item mt-3 mt-lg-0">


                    {{Form::open(['url'=> route('cart.deleteItem',$loop->index),'method'=>'DELETE','class'=>'frm-delete-cart-item'])}}
                    <div class="title d-lg-none">{{__('cart.delete')}}</div>
                    <button type="button"
                            class="btn-floating btn-sm btn-flat btn-danger btn-delete-cart-item">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                    {{Form::close()}}
                </div>
            </div>

        </div>
    @endforeach
    <!--TABLE ITEMS -->

@endif
