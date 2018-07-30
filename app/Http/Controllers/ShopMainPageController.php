<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopMainPageController extends Controller
{
    public function index()
    {
    	return view('shop_frontend.page.mainpage.index');
    }
}
