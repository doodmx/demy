<!--TOTALS-->
<div class="col-12 col-lg-3 p-lg-0">

            <h3 class="h3-responsive text-primary font-weight-bold">
                {{__('cart.totals')}}
            </h3>

            <div class="table-responsive bg-transparent mt-5">
                <table class="table">
                    <tbody>
                    <tr>
                        <th class="lead ">Subtotal</th>
                        <td class="lead text-right">
                            {{number_format($cart['totals']['subtotal'],2)}}
                        </td>
                    </tr>
                    <tr>
                        <th class="lead text-lime-green">{{__('cart.tax')}}</th>
                        <td class="lead text-right">
                            {{number_format($cart['totals']['tax'],2)}}
                        </td>
                    </tr>
                    <tr>
                        <th class="lead font-weight-bold">Total</th>
                        <td class="lead text-right font-weight-bold">
                            <h4 class="text-primary font-weight-bold">
                                {{number_format($cart['totals']['total'],2)}} {{$cart['items'][0]['currency_code']}}
                            </h4>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

</div>
<!--TOTALS -->
