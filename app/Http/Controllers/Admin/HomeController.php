<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateHome;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\MenuContact;

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

}
