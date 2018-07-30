<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The best K-Pop, Korean Clothes, Korean Fashion, Korean Trends Distributor and Forwarder, contact us now!, Korean Clothes, Korean Shoes, Korean Cosmetic, Korean Product, Korean Fashion, Korean Style, Korean Language, K-Pop Clothes, K-Pop Shoes, K-Pop Cosmetic, K-Pop Product, K-Pop Fashion, K-Pop Style, Baju Korea, Sepatu Korea, Produk Korea, Kosmetik Korea, Fashion Korea, Bahasa Korea, Semua tentang Korea, Export Korea, Import Korea, Forwarder Korea, Kios, Korea, KiosKorea, www.kioskorea.com, kioskorea.com">
        <meta name="keywords" content="The best K-Pop, Korean Clothes, Korean Fashion, Korean Trends Distributor and Forwarder, contact us now!, Korean Clothes, Korean Shoes, Korean Cosmetic, Korean Product, Korean Fashion, Korean Style, Korean Language, K-Pop Clothes, K-Pop Shoes, K-Pop Cosmetic, K-Pop Product, K-Pop Fashion, K-Pop Style, Baju Korea, Sepatu Korea, Produk Korea, Kosmetik Korea, Fashion Korea, Bahasa Korea, Semua tentang Korea, Export Korea, Import Korea, Forwarder Korea, Kios, Korea, KiosKorea, www.kioskorea.com, kioskorea.com">
        <meta name="author" content="www.kioskorea.com">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Shop | KiosKorea</title>
    <link href="{{ asset('shop_frontend/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('shop_frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('shop_frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('shop_frontend/css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('shop_frontend/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('shop_frontend/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{ 'frontend/images/icon.png' }}">
    @yield('style')
</head><!--/head-->

<body>
	@yield('header')
    @yield('section')
	@yield('main-section')
	@yield('footer')
    <script src="{{ asset('shop_frontend/js/app.js') }}"></script>
	<script src="{{ asset('shop_frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('shop_frontend/js/jquery.prettyPhoto.js') }}"></script>
    @yield('script')
</body>
</html>