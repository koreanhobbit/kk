@extends('shop_frontend.layout.frame_sidebar')

@section('section')
	@include('shop_frontend.page.shoppage.part.advertisement')
@endsection

@section('main-section')
	@include('shop_frontend.page.shoppage.part.featureditem')
@endsection
