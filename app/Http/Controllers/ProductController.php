<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\CarouselAssets;
use Illuminate\Http\Request;

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
        return view ('detail',['product'=>$data]);

    }
    function search(Request $request){
        $data=Product::where('name','like','%'.$request->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
}
