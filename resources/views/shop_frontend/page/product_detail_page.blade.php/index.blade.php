@extends('shop_frontend.layout.frame_sidebar')

@section('main-section')
	@include('shop_frontend.page.product_detail_page.part.product_detail')

	@include('shop_frontend.page.product_detail_page.part.categorytab')

	@include('shop_frontend.page.product_detail_page.part.recommendeditem')
@endsection