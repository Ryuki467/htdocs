<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller{
    function __construct(){
        $this->middleware('auth');
    }
    
    function index(){
        $products = Product::sortable()->simplePaginate(5);
        return view('product.index', compact('products'));
    }
    
    function create(){
        return view('product.create');
    }
    
    function store(Request $request){
        $this->validate($request, Product::$rules);
        $product = new Product([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
        ]);
        if($product->save()){
            $request->session()->flash('success', __('商品を新規登録しました'));
        }else{
            $request->session()->flash('error', __('商品の新規登録に失敗しました'));
        }
        
        return redirect()->route('admin.product.index');
    }
    
    function edit($id){
        $product = Product::find($id);
        return view('product.edit',compact('product'));
    }
    
    function update(Request $request, $id){
        $this->validate($request, Product::$rules);
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        if($product->save()){
            $request->session()->flash('success', __('商品を更新しました'));
        }else{
            $request->session()->flash('error', __('商品の更新に失敗しました'));
        }
        
        return redirect()->route('admin.product.index');
    }
}
