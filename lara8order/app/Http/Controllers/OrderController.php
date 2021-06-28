<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use App\Models\Product;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller{
    function __construct(){
        $this->middleware('auth');
    }
    
    function index(){
        $orders = Order::with(['Customer'])->sortable()->simplePaginate(5);
        return view('order.index', compact('orders'));
    }
    
    function create(){
        $customers = Customer::all();
        return view('order.create',compact('customers'));
    }
    
    function store(Request $request){
        $this->validate($request, Order::$rules);
        $order = new Order([
            'name' => $request->input('name'),
            'customer_id' => $request->input('customer_id'),
        ]);
        if($order->save()){
            $request->session()->flash('success', __('商品を新規登録しました'));
        }else{
            $request->session()->flash('error', __('商品の新規登録に失敗しました'));
        }
        
        return redirect()->route('admin.order.index');
    }
    
    public function show($id){
        $order = Order::find($id);
        return view('order.show',compact('order'));
    }
    
    function edit($id){
        $order = Order::find($id);
        $customers = Customer::all();
        return view('order.edit',compact('order','customers'));
    }
    
    function update(Request $request, $id){
        $this->validate($request, Order::$rules);
        $order = Order::find($id);
        $order->name = $request->input('name');
        $order->customer_id = $request->input('customer_id');
        if($order->save()){
            $request->session()->flash('success', __('商品を更新しました'));
        }else{
            $request->session()->flash('error', __('商品の更新に失敗しました'));
        }
        
        return redirect()->route('admin.order.index');
    }
    
    function edit2($id){
        $order = Order::find($id);
        $customers = Customer::all();
        return view('order.edit2',compact('order','customers'));
    }
    
    function edit2ajax(Request $request){
        $result = [];
        if($request->ajax() && $id = $request->input('id')){
            // $this->validate($request,Order::$rules);
            $validator = \Validator::make($request->all(),Order::$rules);
            if($validator->passes()){
                $order = Order::find($id);
                $order->name = $request->input('name');
                $order->customer_id = $request->input('customer_id');
                if($order->save()){
                    $result['status'] = "success";
                    return response()->json($result);
                }
            }else{
                $result['error'] = $validator->errors();
            }
        }
        $result['status'] = 'error';
        return response()->json($result);
    }
    
    function update2(Request $request, $id){
        $this->validate($request, Order::$rules);
        $order = Order::find($id);
        $order->name = $request->input('name');
        $order->customer_id = $request->input('customer_id');
        if($order->save()){
            $request->session()->flash('success', __('商品を更新しました'));
        }else{
            $request->session()->flash('error', __('商品の更新に失敗しました'));
        }
        
        return redirect()->route('admin.order.edit2',$order->id);
    }
}
