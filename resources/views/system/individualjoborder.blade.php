@extends('layouts.sysproduction')

@section('content')

<!-- LARAVEL CODE START -->

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Create Job Order from CLIENTORDERID Order Details</strong>
            </div>
            <div class="card-body">
    
                
                @if(count($individualjoborders) > 0)
                                        
                    @foreach($individualjoborders as $individualjoborder)

        
                {!! Form::open(['action' => 'ProductionJobOrdersController@store', 'method' => 'POST']) !!}
                    
                    <!-- JOB ORDER NUMBER -->
                    {{Form::label('joNo', 'Job Order Number')}}
                    {{Form::number('joNo', $individualjoborder->joNo, ['class' => 'form-control', 'readonly'])}}

                    <!-- JOB ORDER DATE -->
                    {{Form::label('joDate', 'Date Created')}}
                    {{Form::date('joDate', \Carbon\Carbon::now(), ['class' => 'form-control', 'readonly'])}}

                    <!-- JOB ORDER CLIENT ID -->
                    {{ Form::hidden('clientID', $individualjoborder->clientID) }}

                    <!-- JOB ORDER CLIENT NAME -->
                    {{Form::label('clientname', 'Client Name')}}
                    {{Form::text('clientname', $individualjoborder->firstName.$individualjoborder->lastName, ['class' => 'form-control', 'placeholder' => 'Client Name', 'disabled'])}}

                    <!-- JOB ORDER COID -->
                    {{Form::label('clientOrderID', 'Client Order ID')}}
                    {{Form::text('clientOrderID', $individualjoborder->clientOrderID, ['class' => 'form-control', 'readonly'])}}

                    <!-- ORDER DETAILS PREVIOUSLY HERE -->

                    <!-- NOTES -->
                    {{Form::label('notes', 'Notes')}}
                    {{Form::text('notes', '', ['class' => 'form-control', 'placeholder' => 'Notes'])}}

                    <!-- JOB ORDER DATE -->
                    {{Form::label('joDeliveryDate', 'Delivery Date')}}
                    {{Form::date('joDeliveryDate', \Carbon\Carbon::now(), ['class' => 'form-control'])}}
                    
                    <br>

                    <!-- PRODUCTION DETAILS PREVIOUSLY HERE -->
                    
                    <!-- JOB ORDER APPROVED -->
                    {{Form::label('joApproved', 'Approved')}}
                    {{Form::hidden('joApproved', 0)}}

                    @if($individualjoborder->joApproved == 1) 
                        
                        {{Form::checkbox('joApproved', 1, true, array('disabled'), ['class' => 'form-control'])}}
                         
                        @else
                            {{Form::checkbox('joApproved', 0, false, array('disabled'), ['class' => 'form-control'])}}
                        
                    @endif       
                    <br>

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
                        
                        @if(count($individualjoborders) > 0)
                                        
                            @foreach($individualjoborders as $individualjoborder)

                        <tr>
                            <td class="cart_product_img">
                                <!-- Product Image -->
                                <img src="../storage/cover_images/{{$individualjoborder->productImage}}" alt="">
                            </td>
                            <td>{{$individualjoborder->productCode}}</td>
                            <td>{{$individualjoborder->quantity}}</td>
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

                            @if(count($individualjoborders) > 0)
                                        
                                @foreach($individualjoborders as $individualjoborder)

                            <tr>
                                <td>{{$individualjoborder->name}}</td>
                                <td>{{$individualjoborder->productQuantity}}</td>
                                <td>{{$individualjoborder->basicMatID}}</td>
                                <td>{{$individualjoborder->quantity}}</td>
                                <td>{{$individualjoborder->rawMatName}}</td>
                                <td>{{$individualjoborder->quantity * $individualjoborder->productQuantity}}</td>
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