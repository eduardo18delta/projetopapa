<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuContact;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
    	$menus = Menu::get();
        $contatos = MenuContact::get();
    	return view('site.landingpage' , compact('menus' , 'contatos'))	;
    }

}
