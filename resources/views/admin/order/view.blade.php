@extends('admin.master');

@section('content')
    
<div class="container col-md-10">
    <div class="content-wrapper">
        <br><br>
        <div class="row ">
			<h6 class="col-md-6">Customer's Name: </h6>
			<span class="col-md-6"> {{$data->name}}</span>
		</div><br>
		<div class="row ">
			<h6 class="col-md-6">Customer's Address:</h6>
			<span class="col-md-6"> {{$data->address}}</span>
		</div><br>
		<div class="row ">
			<h6 class="col-md-6">Phone Number: </h6>
			<span class="col-md-6">{{$data->phone}}</span>
		</div><br>
		<div class="row ">
			<h6 class="col-md-6">Order Id: </h6>
			<span class="col-md-6">{{$data->id}}</span>
		</div><br>
							
        <div class="row ">
            <h6 class="col-md-6">User's Email</h6>
            <span class="col-md-6"> {{$data->useremail}}</span>
        </div><br><br>
        <div class="row ">
        	<h6 class="col-md-6">Product Name</h6>
        	<span class="col-md-6"> {{$productdata->product_name}}</span>
        </div><br>
        <div class="row ">
	        <h6 class="col-md-6">Product Image</h6>
	        <span class="col-md-6"><img src="{{url('/upload/'.$productdata->product_image)}}" class="col-md-3"></span>
    	</div><br>
        <div class="row ">
	        <h6 class="col-md-6">Product Quantity</h6>
	        <span class="col-md-6">{{$productdata->product_quantity}}</span>
	    </div><br>
	    <div class="row ">
	        <h6 class="col-md-6">Order status</h6>
	        <span class="col-md-6 alert alert-danger">Pending</span>
	    </div><br>
	    <div class="row ">
	        <h6 class="col-md-6">Payment Method</h6>
	        <span class="col-md-6">{{$data->payment_method}}</span>
	    </div><br>
	    <div class="row ">
	        <h6 class="col-md-6">Amount to be paid/Amount due</h6>
	        <span class="col-md-6">{{$data->grand_total}}</span>
	    </div>
                      
                        
                     
         
    </div>
</div>

@endsection