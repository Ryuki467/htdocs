@extends('layouts.default')
@section('title','OrderDetail.create')
@include('layouts.menu.admin')
@section('content')
<h1 class="page-header">受注詳細登録</h1>
@if(count($errors)>0)
<ul class="alert alert-danger" role="alert">
@foreach($errors->all() as $error)
	<li>{{$error}}</li>
@endforeach
</ul>
@endif
<form action="{{route('admin.orderdetail.store',$order->id)}}" method="post">
@csrf
<div class="form-group">
	<label for="product">商品</label>
	<select class="form-control" id="product" name="product_id" required>
@foreach($products as $product)
	<option value="{{$product->id}}">{{$product->name}}</option>
@endforeach
	</select>
</div>
<div class="form-group">
	<label for="unit">個数</label>
	<input class="form-control" type="text" name="unit" value="{{old('unit')}}" required>
</div>
<div class="form-group">
	<input class="form-control" type="hidden" name="order_id" value="{{old('order_id',$order->id)}}" required>
</div>
<input type="submit" class="btn btn-primary" value="登録">
</form>
@endsection