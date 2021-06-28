@extends('layouts.default')
@section('title','Order.show')
@include('layouts.menu.admin')
@section('content')
<h1 class="page-header">受注表示</h1>
<table class="table" cellpadding="0" cellspacing="0">
<tr>
	<th scope="col">{{__('id')}}</th>
	<th scope="col">{{__('name')}}</th>
	<th scope="col">{{__('顧客名')}}</th>
	<th scope="col">{{__('created_at')}}</th>
	<th scope="col">{{__('updated_at')}}</th>
</tr>
<tr>
	<td>{{$order->id}}</td>
	<td>{{$order->name}}</td>
	<td>{{$order->Customer->name}}</td>
	<td>{{$order->created_at->format('Y年m月d日H時i分')}}</td>
	<td>{{$order->updated_at->format('Y年m月d日H時i分')}}</td>
</tr>
</table>
<div class="text-center">
	<a class="btn btn-primary" style="display:none"; href="{{route('admin.order.edit',$order->id)}}">受注編集</a>
	<a class="btn btn-primary" style="background-color:red; border:solid red 1px;" href="{{route('admin.order.edit2',$order->id)}}">受注編集2</a>
</div>
@if(!empty($order->order_details))
<h3>受注詳細表示</h3>
<table class="table table-striped" cellpadding="0" cellspacing="0">
<tr>
	<th scope="col">{{__('id')}}</th>
	<th scope="col">{{__('商品名')}}</th>
	<th scope="col">{{__('金額')}}</th>
	<th scope="col">{{__('個数')}}</th>
	<th scope="col">{{__('小計')}}</th>
	<th scope="col">アクション</th>
</tr>
@foreach($order->order_details as $orderdetail)
<tr>
	<td>{{$orderdetail->id}}</td>
	<td>{{$orderdetail->product->name}}</td>
	<td>{{$orderdetail->product->price}}</td>
	<td>{{$orderdetail->unit}}</td>
	<td>{{$orderdetail->product->price * $orderdetail->unit}}</td>
	<td class="actions text-nowrap">
		<a class="btn btn-primary" href="{{route('admin.orderdetail.edit',$orderdetail->id)}}">編集</a>
    </td>
</tr>
@endforeach
</table>
<div class="text-center">
	<a class="btn btn-primary" href="{{route('admin.orderdetail.create',$order->id)}}">受注詳細新規追加</a>
</div>
@endif
@endsection