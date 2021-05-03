@extends('admin.master')

@section('content')

@if(session('message'))

<p class="alert alert-primary text-center">
  {{session('message')}}
</p>

@endif

<div class="content-wrapper col-md-10">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View All Orders</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- code start-->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Orders Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>S. No.</th>
                      <th>Useremail</th>
                      <th>Product Name</th>
                      <th>Product Image</th>
                      <th>Product Quantity</th>
                      <th>Order status</th>
                      <th>Payment Method</th>
                      <th>Grand Total</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                     
                    @foreach($data as $a)
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td>{{$a->useremail}}</td>
                      <td>{{$a->product_name}}</td>
                      <td><img src="{{url('/upload/'.$a->product_image)}}" width="50px" height="50px;"></td>
                      <td>{{$a->product_quantity}}</td>
                     <td class="btn btn-danger btn-sm ">Pending</td>
                     <td>{{$a->payment_method}}</td>
                     <td>{{$a->grand_total}}</td>
                      <td>
                        <a href="{{url('order/view/'.$a->id)}}" class="btn btn-sm  btn-outline-dark">Show</a>
                        <a href="{{url('order/view/'.$a->id)}}" class="btn btn-sm btn-outline-dark">Invoice</a>
                     </td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
        </div>
    </div>
</div>
</section>
            <!-- /.card -->
    <!-- code end-->
    <!-- /.content-wrapper -->
</div>

@endsection