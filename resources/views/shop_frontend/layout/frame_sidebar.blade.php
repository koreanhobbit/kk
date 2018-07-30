@extends('shop_frontend.layout.master')

@section('header')
	@include('shop_frontend.layout.part.header')
@endsection

@section('main-section')
	<section>
		<div class="container">
			 <div class="row">
			 	<div class="col-sm-3">
			 		@include('shop_frontend.layout.part.sidebar')
			 	</div>
			 	<div class="col-sm-9 padding-right">
			 		@yield('mainside')
			 	</div>
			 </div>
		</div>
	</section>
@endsection

@section('footer')
	@include('shop_frontend.layout.part.footer')
@endsection