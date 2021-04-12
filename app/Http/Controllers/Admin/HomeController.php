<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateHome;
use App\Http\Requests\StoreUpdateMenu;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\MenuContact;
use UxWeb\SweetAlert\SweetAlert;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function listar_menu(){
        $menus = Menu::get();
    	return view('admin.menusite.index' , compact('menus'));
    }

    public function listar_perfil(){
        return view('admin.perfil.index');
    }

    public function listar_contato(){
        $contatos = MenuContact::get();
    	return view('admin.contato.index' , compact('contatos'));
    }

    public function editar_contato($id){
        $contatos = MenuContact::find($id);
    	return view('admin.contato.edit', compact('contatos'));
    }

    public function update_contato(StoreUpdateHome $request , $id){
        
        if (!$contatos = MenuContact::find($id)) {
            return redirect()->back();
        }
      
        $contatos->update($request->all());

        return redirect()
                ->route('listar.contato')
                 ->with('message' , 'Atualizado com sucesso');
    
    }

    public function editar_menu($id){
        $menus = Menu::find($id);
    	return view('admin.menusite.edit', compact('menus'));
    }

    public function update_menu(StoreUpdateMenu $request , $id){
        
        if (!$menus = Menu::find($id)) {
            return redirect()->back();
        }
      
        $menus->update($request->all());

        return redirect()
                ->route('listar.menu')
                 ->with('message' , 'Atualizado com sucesso');
   
    }

    public function listar_usuarios(){
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }










}
