<?php

namespace App\Http\Controllers;

use App\Models\MenuContact;
use Illuminate\Http\Request;

class MenuContactController extends Controller
{
    public function index()
    {
    	$menu_contact = MenuContact::Get();
    	dd($menu_contact);

    	//return view('site.landingpage' , compact('menu_contact'))	;


    }
}
