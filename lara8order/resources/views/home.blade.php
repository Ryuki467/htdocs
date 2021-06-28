@extends('layouts.default')

@section('title','Home.index')

@include('layouts.menu.admin')

@section('content')
<div class="row mx-auto">
 	<div class="col-md-5">
		<div class="list-group">
@foreach($homeMenus as $text => $link)
		<a class="list-group-item" href="{{$link}}">{{$text}}</a>
@endforeach
		</div>
	</div>
</div>
@endsection
