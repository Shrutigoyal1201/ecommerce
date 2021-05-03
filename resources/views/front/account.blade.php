@extends('front.master')

@section('content')

<style type="text/css">
    .myaccount-tab-menu a.active, .myaccount-tab-menu a:hover
    {
        background-color:#00868B!important;
    }
</style>

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110" style="background: url('http://medvance.com.sg/wp-content/uploads/2016/08/medvance-my-account-banner-no-gloss.jpg'); background-repeat:no-repeat; background-position: center bottom; background-size: cover;">
    <div class="container">
        <div class="row">
            
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-left">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">my account</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->

<div class="my-account pt-80 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title text-capitalize mb-30 pb-25">my account</h3>
            </div>
            <!-- My Account Tab Menu Start -->
            <div class="col-lg-3 col-12 mb-30">
                <div class="myaccount-tab-menu nav" role="tablist">
                    <a href="#dashboad" data-toggle="tab"><i class="fas fa-tachometer-alt"></i>
                        Dashboard</a>

                    <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                        Orders</a>

                    <a href="#download" data-toggle="tab"><i class="fas fa-cloud-download-alt"></i>
                        Download</a>

                    <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i>
                        Payment
                        Method</a>

                    <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i>
                        address</a>

                    <a href="#account-info" data-toggle="tab" class="active"><i class="fa fa-user"></i> Account
                        Details</a>

                    <a href="{{url('front/logout')}}"><i class="fa fa-sign-out"></i> Logout</a>
                </div>
            </div>
            <!-- My Account Tab Menu End -->

            <!-- My Account Tab Content Start -->
            <div class="col-lg-9 col-12 mb-30">
                <div class="tab-content" id="myaccountContent">
                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="dashboad" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Dashboard</h3>

                            <div class="welcome mb-20">
                                <p>Hello, <strong>{{Auth::user()->name}}</strong> (If Not <strong>{{Auth::user()->name}}!</strong><a
                                        href="{{url('front/logout')}}" class="logout"> Logout</a>)</p>
                            </div>

                            <p class="mb-0">From your account dashboard. you can easily check &amp; view your
                                recent orders, manage your shipping and billing addresses and edit your
                                password and account details.</p>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="orders" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Orders</h3>

                            <div class="myaccount-table table-responsive text-center">
                                    <div class="h-auto shadow-lg">

                                        <h3 class="alert alert-info text-center mb-100">Order Details</h3>
                                            @foreach($detail as $detail)
                                                   
                                            <div class="row">

                                                <div class="col-md-4">
                                                    <a href="{{url('order/'.$detail->order_id)}}"> 
                                                        <img src="{{url('/upload/'.$detail->product_image)}}" class="col-md-4">
                                                    </a>
                                                </div>
                                                
                                               
                                                <div class="col-md-3 mt-5">
                                                     <a href="{{url('order/'.$detail->order_id)}}">{{$detail->product_name}}</a>
                                                </div>
                                                <div class="col-md-2 mt-5">
                                                     Order Total :  {{$detail->grand_total}}
                                                </div>
                                                       
                                                    
                                                <div class="col-md-1 mt-5"> 
                                                          <a href="{{url('order/'.$detail->order_id)}}" class="btn-info btn-lg text-light">View Details</a>
                                                </div>

                                            </div>

                                            <hr>

                                            @endforeach
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="download" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Downloads</h3>

                            <div class="myaccount-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Product</th>
                                            <th>Date</th>
                                            <th>Expire</th>
                                            <th>Download</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Mostarizing Oil</td>
                                            <td>Aug 22, 2018</td>
                                            <td>Yes</td>
                                            <td><a href="#" class="ht-btn black-btn">Download File</a></td>
                                        </tr>
                                        <tr>
                                            <td>Katopeno Altuni</td>
                                            <td>Sep 12, 2018</td>
                                            <td>Never</td>
                                            <td><a href="#" class="ht-btn black-btn">Download File</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="payment-method" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Payment Method</h3>

                            <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Billing Address</h3>

                            <address>
                                <p><strong class="text-uppercase">{{Auth::user()->name}}</strong></p>
                                @foreach($data as $data)
                                <p>{{$data->address}}</p>
                                @endforeach
                            </address>

                            <a href="#" class="ht-btn black-btn d-inline-block edit-address-btn"><i
                                    class="fa fa-edit"></i>Edit Address</a>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade active show" id="account-info" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Account Details</h3>

                            <div class="account-details-form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6 col-12 mb-30">
                                            <input id="first-name" name="name" value="{{Auth::user()->name}}" placeholder="Name" type="text">
                                        </div>

                                        <div class="col-12 mb-30">
                                            <input id="email" name="email" value="{{Auth::user()->email}}" placeholder="Email Address" type="email">
                                        </div>

                                        <div class="col-12 mb-30">
                                            <h4>Password change</h4>
                                        </div>

                                        <div class="col-lg-6 col-12 mb-30">
                                            <input id="new-pwd" placeholder="New Password" type="password" name='new_password'>
                                        </div>

                                        <div class="col-lg-6 col-12 mb-30">
                                            <input id="confirm-pwd" placeholder="Confirm Password" type="password" name='confirm_new_password'>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn theme-btn--dark1 btn--md">Save
                                                Changes</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->
                </div>
            </div>
            <!-- My Account Tab Content End -->
        </div>
    </div>
</div>
<!-- product tab end -->

@endsection