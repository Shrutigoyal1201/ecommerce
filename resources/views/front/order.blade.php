@extends('front.master')

@section('title','Orderdetails')

@section('content')

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110" style="background: url('{{ url('https://image.freepik.com/free-photo/cyber-monday-retail-sales_23-2148688493.jpg') }}'); background-repeat:no-repeat; background-position: center bottom; background-size: cover;">
    <div class="container">
        <div class="row">
            
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-left">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<div class="container mt-100 mb-100">
	<div class="row">
		<div class="h-auto shadow-lg">

			<h3 class="alert alert-info text-center mb-100">Order Deatils</h3>
				
				<div class="row">

					<div class="col-md-1">
					</div>

					<div class="col-md-10">

						@foreach($data as $data)
							<div class="row mb-50">
					
								<p class="col-md-6">Customer's Name: </p>
								<p class="col-md-6"> {{$data->name}}</p>
							
							</div>
							<div class="row mb-50">
					
								<p class="col-md-6">Customer's Address:</p>
								<p class="col-md-6"> {{$data->address}}</p>
							
							</div>
							<div class="row mb-50">
							
								<p class="col-md-6">Phone Number: </p>
								<p class="col-md-6">{{$data->phone}}</p>
							
							</div>
							<div class="row mb-50">
					
								<p class="col-md-6">Order Id: </p>
								<p class="col-md-6">{{$data->id}}</p>
							
							</div>
							<div class="row mb-50">

								<p class="col-md-6">Order Total: </p>
								<p class="col-md-6">{{$data->grand_total}}</p>
							
							</div>

							<!--  <div class="myaccount-table table-responsive text-center">
                                    <div class="h-auto shadow-lg">

                                        <h3 class="alert alert-info text-center mb-100">Order Details</h3>
                                                   
                                            <div class="row">

                                                <div class="col-md-4">
                                                   <img src="{{url('/upload/'.$data->product_image)}}" class="col-md-4">
                                                </div>
                                                
                                               
                                                <div class="col-md-3 mt-5">
                                                	{{$data->product_name}}</a>
                                                </div>
                                                <div class="col-md-2 mt-5">
                                                     Order Total :  {{$data->grand_total}}
                                                </div>
                                                       
                                             
                                            </div>

                                            <hr>
                                    </div>
                            </div> -->
							<div class="row mb-50">
							
								<p class="col-md-6">Product Name: </p>
								<p class="col-md-6">{{$data->product_name}}</p>
							
							</div>
							<div class="row mb-50">

								<p class="col-md-6">Quantity: </p>
								<p class="col-md-6">{{$data->product_quantity}}</p>
							
							</div>
							
						@endforeach
					</div>
				</div>
						
				
		</div>
	</div>
</div>

@endsection