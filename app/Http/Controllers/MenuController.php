<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
    	$menus = Menu::get();
    	return view('site.landingpage' , compact('menus'))	;
    }

    public function teste()
    {
    	$teste = "Eduardo"; 
    	return view('site.landingpage' , compact('teste'))	;
    }



}
