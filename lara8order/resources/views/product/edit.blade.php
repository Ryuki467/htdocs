@extends('layouts.default')
@section('title','Product.edit')
@include('layouts.menu.admin')
@section('content')
<h1 class="page-header">商品編集</h1>
@if(count($errors)>0)
<ul class="alert alert-danger" role="alert">
@foreach($errors->all() as $error)
	<li>{{$error}}</li>
@endforeach
</ul>
@endif
<form action="{{route('admin.product.update',$product->id)}}" method="post">
@method('PUT')
@csrf
<div class="form-group">
	<label for="name">名前</label>
	<input class="form-control" type="text" name="name" value="{{old('name',$product->name)}}" required>
</div>
<div class="form-group">
	<label for="price">価格</label>
	<input class="form-control" type="text" name="price" value="{{old('price',$product->price)}}" required>
</div>
<input type="submit" class="btn btn-primary" value="登録">
</form>
@endsection