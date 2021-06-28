<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller{
    function __construct(){
        $this->middleware('auth');
    }
    
    function create($id){
        $order = Order::find($id);
        $products = Product::all();
        return view('orderdetail.create',compact('order','products'));
    }
    
    function store(Request $request){
        $this->validate($request, OrderDetail::$rules);
        $orderdetail = new OrderDetail([
            'product_id' => $request->input('product_id'),
            'order_id' => $request->input('order_id'),
            'unit' => $request->input('unit'),
        ]);
        if($orderdetail->save()){
            $request->session()->flash('success', __('商品を新規登録しました'));
        }else{
            $request->session()->flash('error', __('商品の新規登録に失敗しました'));
        }
        
        return redirect()->route('admin.order.index');
    }
    
    function edit($id){
        $order = Order::find($id);
        $orderdetail = OrderDetail::find($id);
        $products = Product::all();
        return view('orderdetail.edit',compact('order','orderdetail','products'));
    }
    
    function update(Request $request, $id){
        $this->validate($request, OrderDetail::$rules);
        $order = Order::find($id);
        $orderdetail = OrderDetail::find($id);
        $orderdetail->product_id = $request->input('product_id');
        $orderdetail->unit = $request->input('unit');
        $orderdetail->id = $request->input('id');
        if($orderdetail->save()){
            $request->session()->flash('success', __('商品を更新しました'));
        }else{
            $request->session()->flash('error', __('商品の更新に失敗しました'));
        }
        
        return redirect()->route('admin.order.index');
    }
}
