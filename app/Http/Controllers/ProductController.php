<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\CarouselAssets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;


class ProductController extends Controller
{
    //
    function index(){
        $data=Product::all();
        $imageData=CarouselAssets::all();

            return view ('product',['products'=>$data],['carousel_assets'=>$imageData]);
    }
    function detail($id){
        $data= Product::findorfail($id);
        $moredata=Product::all();
        return view ('detail',['product'=>$data],['allproducts'=>$moredata]);

    }
    function search(Request $request){
        $data=Product::where('name','like','%'.$request->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
    function addToCart(Request $request){
        if($request->session()->has('user')){
            $cart=new Cart;
            $cart->user_id=$request->session()->get('user')['id'];
            $cart->product_id=$request->product_id;
            $cart->save();
            return redirect('/');   
        }
        else{
            return redirect('/login');
        }
    }
    function buyImmediate(Request $request){
        if($request->session()->has('user')){
            $cart=new Cart;
            $cart->user_id=$request->session()->get('user')['id'];
            $cart->product_id=$request->product_id;
            $cart->save();
            return redirect('/cartlist');   
        }
        else{
            return redirect('/login');
        }
    }
    static function cartItem(){
         $userId=Session::get('user')['id'];
         return Cart::where('user_id',$userId)->count();
    }
    function cartlist(Request $request){
        if($request->session()->has('user')){
            $userId=Session::get('user')['id'];
                $products=DB::table('cart')->join('products','cart.product_id','=','products.id')
                ->where('cart.user_id',$userId)
                ->select('products.*','cart.id as cartId')->get();
                return view('cartlist',['products'=>$products]);
        }
        else{
            return redirect('/login');
        }
    }
    function removeCart($id){
        Cart::destroy($id);
        return redirect('/cartlist');
    }
    function orderNow(){
        $userId=Session::get('user')['id'];
        $total=DB::table('cart')->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');
        return view('orderNow',['total'=>$total]);
    }
    function orderPlace(Request $request){
        $userId=Session::get('user')['id'];
        $allCart=Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart){
            $order=new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$request->paymentmethod;
            if($order->payment_method == 'COD'){
                $order->payment_status='Pending';
            }
            else{
                $order->payment_status='Completed';
            }
            $order->address=$request->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
        return redirect('/');
    }
    function myOrder(Request $request){
        if($request->session()->has('user')){
            $userId=Session::get('user')['id'];
            $orders= DB::table('orders')->join('products','orders.product_id','=','products.id')
            ->where('orders.user_id',$userId)
            ->get();
            return view('myOrders',['orders'=>$orders]);
        }
        else{
            return redirect('/login');
        }
    }
}
