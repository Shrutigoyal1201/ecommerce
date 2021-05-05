
@extends('admin.master')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Invoice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
            Customer Details  
            </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>JMG</strong><br>
                    <address>Shatabdi Complex, Shop, G-5,  Huzrat Pull,  Lashkar,  Gwalior,  Madhya Pradesh 474001</address>
                    Email: sales.jaimaagumano@gmail.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>

                    <strong>{{$data->name}}</strong><br>
                    <address>{{$data->address}}</address>
                    Email: {{$data->useremail}}
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #007612</b><br>
                  <br>
                  <b>Order ID:</b>{{$data->order_id}}<br>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Product</th>
                      <th>Quantity</th>
                      <th>Product price</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>{{$productdata->product_name}}</td>
                      <td>{{$productdata->product_quantity}}</td>
                      <td>{{$productdata->product_price}}</td>
                      <td>Rs. {{$data->grand_total}}</td>
                    </tr>
                    
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <br>
              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="../../backend/dist/img/credit/visa.png" alt="Visa">
                  <img src="../../backend/dist/img/credit/mastercard.png" alt="Mastercard">
                  <img src="../../backend/dist/img/credit/american-express.png" alt="American Express">
                  <img src="../../backend/dist/img/credit/paypal2.png" alt="Paypal">

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                    plugg
                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Amount Due 2/22/2014</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>Rs. {{$data->grand_total}} </td>
                      </tr>
                      <tr>
                        <th>Tax (9.3%)</th>
                        <td>$10.34</td>
                      </tr>
                      <tr>
                        <th>Shipping:</th>
                        <td>$5.80</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>$265.24</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
 @endsection