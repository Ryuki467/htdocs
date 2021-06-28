<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		@yield('metaIcon')
		<title>@yield('title')</title>
		<link href="{{asset('css/app.css')}}" rel="stylesheet">
		<link href="{{asset('css/style.css')}}" rel="stylesheet">
		@yield('css')
		<script src="{{asset('js/app.js')}}"></script>
		@yield('script')
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="slidr-master/slidr.min.js"></script>
		<style>
            .youtubesm{
            background:#fff
            }
            .youtubesm a{
            border:2px
            solid #fff;
            display:block;
            position:relative
            }
            .youtubesm a:hover{
            opacity:.6
            }
            .youtubesm a::before{
            display:block;
            width:100%; /*アイコンの幅調整*/
            height:60px; /*アイコンの高さ調整*/
            margin:-32px auto 0;
            position:absolute;
            top:50%;
            left:0;
            right:0;
            z-index:1
            }
        </style>
	</head>
	<body>
		@yield('menu')
		<div class="container-fluid mt-3">
			<div class="row">
				<div class="col-sm-10 main mx-auto">
					@yield('content')
				</div>
			</div>
		</div>
	</body>
</html>