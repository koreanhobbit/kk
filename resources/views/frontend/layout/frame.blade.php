@extends('frontend.layout.master')

@section('nav')
	@include('frontend.layout.mainnav')
@endsection

@section('flashmessage')
	@include('frontend.layout.flashmessage')
@endsection

@section('footer')
	@include('frontend.layout.footer')
@endsection

@section('messenger')
	@include('frontend.layout.messenger')
@endsection