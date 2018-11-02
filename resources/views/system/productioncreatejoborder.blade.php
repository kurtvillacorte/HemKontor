@extends('layouts.sysproduction')

@section('content')

<!-- LARAVEL CODE START -->

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Create Job Order from CLIENTORDERID Order Details</strong>
            </div>
            <div class="card-body">
    
                {!! Form::open(['action' => 'ProductionJobOrderController@store', 'method' => 'POST']) !!}
                    
                    <!-- JOB ORDER NUMBER -->
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

                    <!-- JOB ORDER NUMBER -->
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                
                    <!-- JOB ORDER CLIENT ID -->
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

                    <!-- JOB ORDER PROJECT -->
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

                    <!-- JOB ORDER APPORVED -->
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

                    <!-- JOB ORDER DETAILS ID -->
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            <th>Client Order Detail ID</th>
                            <th>Client Order ID</th>
                            <th>Product/s Ordered</th>
                            <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
            
                            <tr>
                                <td>{{$individualorder->clientOrderDetailID}}</a></td>
                                <td>{{$individualorder->clientOrderID}}</td>
                                <td>{{$individualorder->productCode}}</td>
                                <td>{{$individualorder->quantity}}</td>
                            </tr>
                    
            
                        </tbody>
                    </table>
                
                    <!-- ITEM DESCRIPTION -->
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

                    <!-- ITEM QUANTITY -->
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

                    <!-- NOTES -->
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

                    <!-- JOB ORDER DELIVERY DATE -->
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

                    <!-- JOB ORDER DELIVERY ADDRESS -->
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

                    <!-- JOB ORDER PRODUCTION DETAILS ID -->
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            <th>Client Order Detail ID</th>
                            <th>Client Order ID</th>
                            <th>Product/s Ordered</th>
                            <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
            
                            <tr>
                                <td>{{$individualorder->clientOrderDetailID}}</a></td>
                                <td>{{$individualorder->clientOrderID}}</td>
                                <td>{{$individualorder->productCode}}</td>
                                <td>{{$individualorder->quantity}}</td>
                            </tr>
                    
            
                        </tbody>
                    </table>
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

                    <!-- JOB ORDER PRODUCTION MATERIAL -->
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                
            <!-- LARAVEL CODE END -->
                
              
                    

                    {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
                {!! Form::close() !!} 
    
<!-- LARAVEL CODE END -->
    
  </tbody>
</table>
<br>


@endsection