<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Category;
use App\Product;
use App\Cart;
use Session;
use DB;
use Auth;
use App\User;
use App\Contact;
use App\Order;
use App\Orderproduct;

class FrontController extends Controller
{
   
    public function index()
    {
    	$banner=Banner::whereBetween('id',['1','5'])->get();
    	$cat=Category::limit('5')->get();
    	$prod=Product::all();
        $category=Category::whereBetween('id',['7','11'])->get();
        $session_id=Session::getId();

        $data=Cart::where(['session_id'=>$session_id])->get();

        return view('front.index',compact('banner','cat','prod','data','category'));
    }

    public function category($category_id)
    {

        $banner=Banner::whereBetween('id',['1','5'])->get();
        $cat=Category::limit('5')->get();
        $prod=Product::where(['category_id'=>$category_id])->get();
        $category=Category::whereBetween('id',['7','11'])->get();
        $session_id=Session::getId();

        $data=Cart::where(['session_id'=>$session_id])->get();

        return view('front.index',compact('banner','cat','prod','data','category'));
    }

    public function productdetail($id)
    {
        $session_id=Session::getId();

        $data=Cart::where(['session_id'=>$session_id])->get();

    	$prod=Product::find($id);

    	return view('front.productdetail',compact('prod','data'));

    }

    public function addtocart(Request $a)
    {
    	// print_r($a->all());

        $session_id=Session::getId();

        
    	$cart=new Cart;

        if(Auth::check())
        {
            $useremail=Auth::user()->email;

            $cart->useremail=$useremail;
        }

    	$cart->product_id=$a->product_id;
    	$cart->product_name=$a->product_name;
    	$cart->product_price=$a->product_price;
    	$cart->product_image=$a->product_image;
    	$cart->product_quantity=$a->product_quantity;
        $cart->session_id=$session_id;

    	$cart->save();
    	if($cart)
    	{
    		return redirect('cart');
    	}
    }

    public function cart()
    {

        if(Auth::check())
        {
            $banner=Banner::where('title','About')->get();
            $useremail=Auth::User()->email;
            $data=Cart::where('useremail',$useremail)->get();
            $d=$data;
            return view('front.cart',compact('data','d','banner'));
        }
        else
        {
            $banner=Banner::where('title','About')->get();
            $session_id=Session::getId();
            // print_r($session_id);
            $data=Cart::where(['session_id'=>$session_id])->get();
            $d=$data;
            return view('front.cart',compact('data','d','banner'));
        }
     
    }

    public function delcartitem($id)
    {
        $data=Cart::find($id);

        $data->delete();
        if($data)
        {
            return redirect('cart')->with('message','item removed from the cart');
        }
    }


    public function updatequantity($id=null,$product_quantity=null)
    {
        // print_r($id);
        // print_r($product_quantity);

        DB::table('carts')->where('id',$id)->increment('product_quantity',$product_quantity);

        return redirect('cart')->with('message','Product quantity has been updated');
    }

    public function checkout()
    {
        $useremail=Auth::User()->email;
        $d=Cart::where('useremail',$useremail)->get();
        $data=$d;
        return view('front.checkout',compact('d','data'));    
    }

    public function place_order(Request $a)
    {
        // print_r($a->all());

        $data=new Order;

        $data->useremail=$a->email;
        $data->name=$a->name;
        $data->address=$a->address;
        $data->city=$a->city;
        $data->state=$a->state;
        $data->country=$a->country;
        $data->pincode=$a->pincode;
        $data->phone=$a->phone;
        $data->payment_method=$a->payment_method;
        $data->grand_total=$a->grand_total;

        $data->save();

        $order_id=DB::getPdo()->lastinsertID();
        
        // print_r($order_id);
        // die;

        $cart_product=DB::table('carts')->where(['useremail'=>$a->email])->get();

        // print_r($cart_product);

        foreach ($cart_product as $c)
        {
            $cart=new Orderproduct;

            $cart->useremail=$a->email;
            $cart->order_id=$order_id;
            $cart->product_id=$c->product_id;
            $cart->product_name=$c->product_name;
            $cart->product_price=$c->product_price;
            $cart->product_size=$c->product_size;
            $cart->product_quantity=$c->product_quantity;
            $cart->product_image=$c->product_image;

            $cart->save();

        }

        if($cart)
        {
            return redirect('thanks/'.$order_id)->with('message','Order details submitted sucessfully');
        }
        else
        {
            return redirect('thanks/'.$order_id)->with('message','Order could not be placed :( Try again!');
        }
    }

    public function orderconfirm($order_id)
    {
        $useremail=Auth::user()->email;

        DB::table('carts')->where('useremail',$useremail)->delete();

        $data=Order::where('id',$order_id)->get();
        $productdata=Orderproduct::where('order_id',$order_id)->get();

        // print_r($data);
        // print_r($productdata);
        // die;
        return view('front.thanks',compact('data','productdata'));
    }

    public function account()
    {
        $useremail=Auth::user()->email;

        $data=Order::where('useremail',$useremail)->get();
        $productdata=Orderproduct::where('useremail',$useremail)->get();
        
        return view('front.account',compact('data','productdata'));
    }

    public function about()
    {
        $banner=Banner::where('title','About')->get();
        return view('front.about',compact('banner'));
    }


    public function contact()
    {
        $banner=Banner::where('title','Contact')->get();
        return view('front.contact',compact('banner'));
    }

    public function savecontact(Request $c)
    {
        $contact= new Contact;

        $contact->name=$c->name;
        $contact->email=$c->email;
        $contact->phone=$c->phone;
        $contact->des=$c->des;

        $contact->save();

        if($contact)
        {
            return redirect('contact')->with('message','Your contact information has been added');
        }
    }


}
