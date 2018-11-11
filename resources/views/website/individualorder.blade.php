@extends('layouts.website')

    @section('content')



        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">

                        
                        @foreach ($individualorders as $individualorder)

                        <div class="cart-title mt-50">
                            <h2>Order Details for {{$individualorder->clientOrderID}}</h2>
                        </div>

                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Product Ordered</th>
                                        <th>Quantity</th>
                                        <th>Price Each</th>
                                        <th>Total Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                            @break
                        @endforeach
                                
                                <!-- LARAVEL CODE START -->
                                    
                                @foreach ($individualorders as $individualorder)

                                            <tr>
                                                
                                                <td class="cart_product_img">
                                                    <img src="../storage/cover_images/{{$individualorder->productImage}}" alt="">
                                                </td>
                                                <td class="price">
                                                    <span>{{$individualorder->name}}</span>
                                                </td>
                                                <td class="cart_product_desc">
                                                    <span>{{$individualorder->productQuantity}}</span>
                                                </td>
                                                <td>{{$individualorder->productPrice}} PHP</td>
                                                <td>{{$individualorder->productPrice * $individualorder->productQuantity}} PHP</td>
                                            </tr>
                                @endforeach

                                
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