@extends('layouts.sysproduction')

@section('content')

<!-- LARAVEL CODE START -->

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Create Job Order from CLIENTORDERID Order Details</strong>
            </div>
            <div class="card-body">
    
                
                @if(count($individualorders) > 0)
                                        
                    @foreach($individualorders as $individualorder)

        
                {!! Form::open(['action' => 'ProductionJobOrdersController@store', 'method' => 'POST']) !!}
                    
                    <!-- JOB ORDER NUMBER -->
                    {{Form::label('joNo', 'Job Order Number')}}
                    {{Form::number('joNo', '', ['class' => 'form-control', 'placeholder' => 'JO-00000'])}}

                    <!-- JOB ORDER DATE -->
                    {{Form::label('joDate', 'Date Created')}}
                    {{Form::date('joDate', \Carbon\Carbon::now(), ['class' => 'form-control', 'readonly'])}}

                    <!-- JOB ORDER CLIENT NAME -->
                    {{Form::label('clientname', 'Client Name')}}
                    {{Form::text('clientname', $individualorder->firstName.' '.$individualorder->lastName, ['class' => 'form-control', 'placeholder' => 'Client Name', 'disabled'])}}

                    <!-- JOB ORDER COID -->
                    {{Form::label('clientOrderID', 'Client Order ID')}}
                    {{Form::text('clientOrderID', $individualorder->clientOrderID, ['class' => 'form-control', 'readonly'])}}

                    <!-- NOTES -->
                    {{Form::label('notes', 'Notes')}}
                    {{Form::text('notes', '', ['class' => 'form-control', 'placeholder' => 'Notes'])}}

                    <!-- JOB ORDER DATE -->
                    {{Form::label('joDeliveryDate', 'Delivery Date')}}
                    {{Form::date('joDeliveryDate', \Carbon\Carbon::now(), ['class' => 'form-control'])}}
                    
                    <br>
                    
                    <!-- JOB ORDER APPROVED -->
                    {{Form::label('joApproved', 'Approved')}}
                    
                    {{Form::checkbox('joApproved', 0, false, array('disabled'), ['class' => 'form-control'])}}
                                       
                    <br>
                    {{Form::submit('Submit', ['class'=>'btn btn-success'])}}

                {!! Form::close() !!} 

                        @break
                    @endforeach

                @endif
                
                <!-- JOB ORDER DETAILS ID -->
                <br>
                <h4><b>Order Details</b></h4>
                <br>

                
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        <th></th>
                        <th>Product/s Ordered</th>
                        <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @if(count($individualorders) > 0)
                                        
                            @foreach($individualorders as $individualorder)

                        <tr>
                            <td class="cart_product_img">
                                <!-- Product Image -->
                                <img src="../storage/cover_images/{{$individualorder->productImage}}" alt="">
                            </td>
                            <td>{{$individualorder->productCode}}</td>
                            <td>{{$individualorder->quantity}}</td>
                        </tr>

                            @endforeach

                        @endif

                    </tbody>
                </table>
                
                <!-- JOB ORDER PRODUCTION DETAILS -->
                <br>
                    <h4><b>Production Details</b></h4>
                    <br>
                    <!-- JOB ORDER PRODUCTION DETAILS ID -->
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Basic Material/s</th>
                            <th>Quantity</th>
                            <th>Raw Materials (RM) Needed</th>
                            <th>RM Quantity</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if(count($individualorders) > 0)
                                        
                                @foreach($individualorders as $individualorder)

                            <tr>
                                <td>{{$individualorder->name}}</td>
                                <td>{{$individualorder->productQuantity}}</td>
                                <td>{{$individualorder->basicMatID}}</td>
                                <td>{{$individualorder->quantity}}</td>
                                <td>{{$individualorder->rawMatName}}</td>
                                <td>{{$individualorder->quantity * $individualorder->productQuantity}}</td>
                            </tr>
                            
                                @endforeach

                            @endif
            
                        </tbody>
                    </table>
<!-- LARAVEL CODE END -->
    
  </tbody>
</table>
<br>


@endsection