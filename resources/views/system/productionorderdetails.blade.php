@extends('layouts.sysproduction')

@section('content')

<!-- LARAVEL CODE START -->

@if(count($individualorders) > 0)
                                        
        @foreach($individualorders as $individualorder)

            <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Client Order Details for {{$individualorder->clientOrderID}}</strong>
                </div>
                <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                <th></th>
                <th>Product Ordered</th>
                <th>Quantity</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                        <td class="cart_product_img">
                                <a href="#"><img src="{{asset('img/bg-img/cart2.jpg')}}" alt="Product"></a>
                            </td>
                    <td>{{$individualorder->name}}</td>
                    <td>{{$individualorder->productCode}}</td>
                    <td>{{$individualorder->quantity}}</td>
                </tr>
        
        @endforeach

    @endif



    

    
<!-- LARAVEL CODE END -->
    
  </tbody>
</table>

<a href="{{url('productionjoborders/create')}}"><button type="button" class="btn btn-success">Create Job Order</button></a>

@endsection