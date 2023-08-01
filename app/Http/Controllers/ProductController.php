<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Category;
use App\Models\CarouselAssets;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;


class ProductController extends Controller
{
    //
    function index()
    {
        $trending = Product::inRandomOrder()->take(7)->get();
        $newRel = Product::inRandomOrder()->take(7)->get();
        $imageData = CarouselAssets::all();
        $data=[
            'trendingproducts' => $trending, 'carousel_assets' => $imageData,'newproducts' => $newRel,
        ];
        
        return view('product', $data);
    }
    function allProducts(){
        $products=Product::all();
        return view('allProducts', ['products' => $products]);
    }
    function detail($id)
    {
        $data = Product::findorfail($id);
        $moredata = Product::inRandomOrder()->take(7)->get();
        return view('detail', ['product' => $data], ['allproducts' => $moredata]);

    }
    function search(Request $request)
    {
        $data = Product::where('name', 'like', '%' . $request->input('query') . '%')->get();
        $query=$request->input('query');
        return view('search', ['products' => $data],['query'=>$query]);
    }
    function addToCart(Request $request)
    {
        if ($request->session()->has('user')) {
            $userId =$request->session()->get('user')['id'];
            $productId = $request->product_id;
                // if cart product exists for user in cart /// add else creatte new item
            $existingCartItem = Cart::where('user_id', $userId)->where('product_id', $productId)->first();
            if($existingCartItem){
                $existingCartItem->count+=1;
                $existingCartItem->save();
            }
            else{
                $cart = new Cart;
                $cart->user_id = $request->session()->get('user')['id'];
                $cart->product_id = $request->product_id;
                $cart->count=1;
                $cart->save();

            }
            return redirect()->back();
        } else {
            return redirect('/login');
        }
    }
    function buyImmediate(Request $request)
    {
        if ($request->session()->has('user')) {
            $userId =$request->session()->get('user')['id'];
            $productId = $request->product_id;
                // if cart product exists for user in cart /// add else creatte new item
            $existingCartItem = Cart::where('user_id', $userId)->where('product_id', $productId)->first();
            if($existingCartItem){
                $existingCartItem->count+=1;
                $existingCartItem->save();
            }
            else{
                $cart = new Cart;
                $cart->user_id = $request->session()->get('user')['id'];
                $cart->product_id = $request->product_id;
                $cart->count=1;
                $cart->save();

            }
            return redirect('/cartlist');
        } else {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
         
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
       
    }
    function cartlist(Request $request)
    {
        if ($request->session()->has('user')) {
            $userId = Session::get('user')['id'];
            $products = DB::table('cart')->join('products', 'cart.product_id', '=', 'products.id')
                ->where('cart.user_id', $userId)
                ->select('products.*', 'cart.id as cartId','cart.count as cartCount')->get();
            return view('cartlist', ['products' => $products]);
        } else {
            return redirect('/login');
        }
    }
    function removeCart($id)
    {   
        Cart::destroy($id);
        return redirect('/cartlist');
    
    }
    public function orderNow(Request $request)
    {
        
        $userId = Session::get('user')['id'];
        $selectedCartIds = $request->input('selected_cart_ids', []);
        
        // Get the cart items for the current user session
        $cartItems = Cart::where('user_id', $userId)
            ->whereIn('id', $selectedCartIds)
            ->with('product')
            ->get();
        
        $total = 0;

        foreach ($cartItems as $item) {
            // Calculate the total price for each item (price * count)
            $itemTotal = $item->product->price * $item->count;
            // Add the item total to the overall total
            $total += $itemTotal;


        }

        return view('orderNow', ['total' => $total]);
    }
    function orderPlace(Request $request)
    {
        $userId = Session::get('user')['id'];
         $allCart = Cart::where('user_id', $userId)->get();
        foreach ($allCart as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->count=$cart['count'];
            $order->payment_method = $request->paymentmethod;
            if ($order->payment_method == 'COD') {
                $order->payment_status = 'Pending';
            } else {
                $order->payment_status = 'Completed';
            }
            $order->address = $request->address;
            $order->save(); 
            Cart::where('user_id', $userId)->delete();
        }
        return redirect('/');
    }
    
    function myOrder(Request $request){
        if($request->session()->has('user')){
            $userId=Session::get('user')['id'];
            $orders=DB::table('orders')->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $userId)
            ->get();
            
            return view('myOrders',['orders'=>$orders]);
        }

        else{
            return redirect('/login');
        }
    }
    public function cartUpdate(Request $request)
    {
        foreach ($request->all() as $key => $value) {
            // Check if the key starts with 'cart_count_'
            if (strpos($key, 'cart_count_') === 0) {
                // Extract the cartId from the key
                $cartId = substr($key, strlen('cart_count_'));
                
                // Get the new count value from the request
                $newCount = $value;

                // Find the cart item by ID
                $cartItem = Cart::find($cartId);
                if ($cartItem) {
                    // Update the 'count' column in the 'Cart' table
                    $cartItem->count = $newCount;
                    $cartItem->save(); // Use save() to persist the changes
                }
            }
        }

        $userId = Session::get('user')['id'];
        $selectedCartIds = $request->input('selected_cart_ids', []);

        $order=Order::where('user_id', $userId)
        ->get()->last();
        // Get the cart items for the current user session
        $cartItems = Cart::where('user_id', $userId)
            ->whereIn('id', $selectedCartIds)
            ->with('product')
            ->get();

        $total = 0;

        foreach ($cartItems as $item) {
            // Calculate the total price for each item (price * count)
            $itemTotal = $item->product->price * $item->count;
            // Add the item total to the overall total
            $total += $itemTotal;   
        }
        $data=['total' => $total,'cartItems' => $cartItems,'order'=>$order];
        return view('orderNow', $data);
    }
    
    // Admin interface
    function orderPage(Request $request){
        $sentData=DB::table('orders')
        ->join('products', 'orders.product_id', '=', 'products.id')
        ->join('users','users.id', '=', 'orders.user_id')
        ->select('orders.id as orderID','orders.*','products.*', 'users.name as userName', 'users.email as userMail')->get();
        return view('adminOrders.index',['ordersData'=>$sentData]);
    }
    function deleteOrder($id)
    {
        Order::destroy($id);
        return redirect('/orders/index');
    }
    function createProductPage(){
        $brands=Brand::all();
        $categories=Category::all();
        return view('adminProducts.create',compact('brands', 'categories'));
    }
    function createProduct(Request $request){
        $request->validate([
            'name'=>"required",
            'price'=>"required",
            'description'=>"required",
            'brand'=>"required",
            'category'=>"required",
            'gallery'=>"required",
            
        ]);
        $image=$request->file('gallery')->store('gallery');
        $product=new Product;
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->category=$request->category;
        $product->brand=$request->brand;
        $product->gallery=$image;
        $product->save();
        return redirect ('admin/products');
    }
    function getProducts(){
        $products= Product::all();
        return view('adminProducts.index',['products'=>$products]);
    }
    function deleteProduct($id)
    {
        Product::destroy($id);
        return redirect('/admin/products');
    }
    public function editProduct($id){
        $product=Product::findOrFail($id);
        $brands=Brand::all();
        $categories=Category::all();
        $data = [
            'brands' => $brands,
            'categories' => $categories,
            'product' => $product,
        ];
        // dd($data);
        return view('adminProducts.edit',$data);
    }
    public function updateProduct(Request $request,$id){
        $product=Product::findOrFail($id);
        $request->validate([
            'name'=>"required",
            'price'=>"required",
            'description'=>"required",
            'brand'=>"required",
            'category'=>"required",            
        ]);
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->category=$request->category;
        $product->brand=$request->brand;
        $product->update();
        return redirect('/admin/products');
}
function brandInfo(){
     $brands=Brand::all();
    $categories=Category::all();
    return view('brandncategory.index', compact('brands', 'categories'));
}
function createBrand(Request $request){
    $request->validate(['name'=>"required",] );
    $brand=new Brand;
    $brand->name=$request->name;
    $brand->save();
    return redirect('/admin/brandinfo');
}
function createCategory(Request $request){
    $request->validate(['name'=>"required",] );
    $category=new Category;
    $category->name=$request->name;
    $category->save();
    return redirect('/admin/brandinfo');

}
function deleteBrand($id)
    {
        Brand::destroy($id);
        return redirect('/admin/brandinfo');
    }
function deleteCategory($id)
    {
        Category::destroy($id);
        return redirect('/admin/brandinfo');
    }

}
    