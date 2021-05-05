<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Orderproduct;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin()
    {
        return view('auth.login');
    }
    public function dashboard()
    {
        return view('admin.master');
    }

    public function orders()
    {
        $data=Order::join('orderproducts','orders.id','=','orderproducts.order_id')->orderBy('order_id','desc')->get();
        return view('admin.order.display',compact('data'));
    }
    public function orderdetail($id)
    {
        $data=Order::find($id);
        $productdata=Orderproduct::find($id);
        return view('admin.order.view',compact('data','productdata'));
    }
    public function orderinvoice($id)
    {
        $data=Order::find($id);
        $productdata=Orderproduct::find($id);
        return view('admin.order.invoice',compact('data','productdata'));
    }
}

