@extends('layouts.sysproduction')

@section('content')

<div class="col-md-12">
  <div class="card">
      <div class="card-header">
          <strong class="card-title">Client Orders</strong>
      </div>
      <div class="card-body">
<table id="bootstrap-data-table" class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Client Order ID</th>
      <th>Status</th>
      <th>Date Ordered</th>
      <th>Date Required</th>
    </tr>
  </thead>
  <tbody>

    <!-- LARAVEL CODE START -->
    @if(count($clientorders) > 0)
                                        
    @foreach($clientorders as $clientorder)

        

            <tr>
                <td><a href="productionorderdetails/{{$clientorder->clientOrderID}}">{{$clientorder->clientOrderID}}</a></td>
                <td>{{$clientorder->status}}</td>
                <td>{{$clientorder->dateOrdered}}</td>
                <td>{{$clientorder->dateRequired}}</td>
            </tr>

            
        

    @endforeach

@else
    <div class="cart-title mt-50">
        <h2>You have no orders!</h2>
    </div>
@endif
<!-- LARAVEL CODE END -->
    
    
  </tbody>
</table>
      </div>
  </div>
</div>

@endsection