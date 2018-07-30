@extends('shop_frontend.layout.frame_sidebar')

@section('section')
	@include('shop_frontend.page.mainpage.part.slider')
@endsection

@section('mainside')
	@include('shop_frontend.page.mainpage.part.featureditem')
	
	@include('shop_frontend.page.mainpage.part.categorytab')
	
	@include('shop_frontend.page.mainpage.part.recommendeditem')
@endsection
