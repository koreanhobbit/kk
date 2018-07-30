@extends('shop_frontend.layout.master')

@section('header')
	@include('shop_frontend.layout.part.header')
@endsection

@section('main-section')
	@yield('fullside')
@endsection

@section('footer')
	@include('shop_frontend.layout.part.footer')
@endsection