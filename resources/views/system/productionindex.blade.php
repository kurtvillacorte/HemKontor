@extends('layouts.sysproduction')

@section('content')

<div class="cart-table clearfix">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>Job Order Number</th>
                    <th>Date Created</th>
                    <th>Client Order Number</th>
                    <th>Client Name</th>          
                </tr>
            </thead>
            <tbody>
            
            <!-- LARAVEL CODE START -->
                @if(count($joborders) > 0)
                    
                    @foreach($joborders as $joborder)

                        <tr>
                            <td class="cart_product_img">
                                <h4><a href="productionjoborders/{{$joborder->joNo}}">{{$joborder->joNo}}</a></h4>
                            </td>
                            <td class="cart_product_desc">
                                <h4>{{$joborder->joDate}}</h5>
                            </td>
                            <td class="price">
                                <span>{{$joborder->clientOrderID}}</span>
                            </td>
                            <td class="cart_product_desc">
                                <span>{{$joborder->firstName.$joborder->lastName}}</span>
                            </td>
                        </tr>

                    @endforeach

                @else
                    <div class="cart-title mt-50">
                        <h2>You have no Job Orders!</h2>
                    </div>
                @endif
            <!-- LARAVEL CODE START -->
            
            </tbody>
        </table>
    </div>

@endsection