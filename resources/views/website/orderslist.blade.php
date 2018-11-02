@extends('layouts.website')

@section('content')



        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="cart-title mt-50">
                            <h2>My Orders</h2>
                        </div>

                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>Order Number</th>
                                        <th>Status</th>
                                        <th>Last Updated</th>
                                        <th>ETD</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                <!-- LARAVEL CODE START -->
                                    @if(count($clientorders) > 0)
                                        
                                        @foreach($clientorders as $clientorder)

                                            <tr>
                                                <td class="cart_product_img">
                                                    <h4><a href="clientorderdetails/{{$clientorder->clientOrderID}}">{{$clientorder->clientOrderID}}</a></h4>
                                                </td>
                                                <td class="cart_product_desc">
                                                    <h4>{{$clientorder->status}}</h5>
                                                </td>
                                                <td class="price">
                                                    <span>{{$clientorder->dateOrdered}}</span>
                                                </td>
                                                <td class="cart_product_desc">
                                                    <span>{{$clientorder->dateRequired}}</span>
                                                </td>
                                            </tr>

                                        @endforeach

                                    @else
                                        <div class="cart-title mt-50">
                                            <h2>You have no orders!</h2>
                                        </div>
                                    @endif
                                <!-- LARAVEL CODE START -->
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    

@endsection