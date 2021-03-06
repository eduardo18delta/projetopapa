<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateHome;
use App\Http\Requests\StoreUpdateMenu;
use App\Http\Requests\StoreUpdateUsers;
use App\Http\Requests\StoreUpdateServicos;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\MenuContact;
use App\Models\User;
use App\Models\servicos;
use Illuminate\Support\Facades\Storage;
use SweetAlert;
use UxWeb\SweetAlert\SweetAlert as SweetAlertSweetAlert;



class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function listar_menu()
    {
        $menus = Menu::get();
        return view('admin.menusite.index', compact('menus'));
    }

    public function listar_servicos()
    {
        $servicos = servicos::get();
        return view('admin.servicos.index', compact('servicos'));
    }


    public function editar_servicos($id)
    {
        $servicos = servicos::find($id);
        return view('admin.servicos.edit', compact('servicos'));
    }

    public function listar_perfil()
    {
        return view('admin.perfil.index');
    }

    public function listar_contato()
    {
        $contatos = MenuContact::get();
        return view('admin.contato.index', compact('contatos'));
    }

    public function editar_contato($id)
    {
        $contatos = MenuContact::find($id);
        return view('admin.contato.edit', compact('contatos'));
    }

    public function update_contato(StoreUpdateHome $request, $id)
    {

        if (!$contatos = MenuContact::find($id)) {
            return redirect()->back();
        }

        $contatos->update($request->all());

        return redirect()
            ->route('listar.contato')
            ->with('message', 'Atualizado com sucesso');
    }

    public function editar_menu($id)
    {
        $menus = Menu::find($id);
        return view('admin.menusite.edit', compact('menus'));
    }

    public function update_menu(StoreUpdateMenu $request, $id)
    {

        if (!$menus = Menu::find($id)) {
            return redirect()->back();
        }

        $menus->update($request->all());

        return redirect()
            ->route('listar.menu')
            ->with('message', 'Atualizado com sucesso');
    }

    public function listar_usuarios()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }


    public function editar_usuarios($id)
    {
        $users = User::find($id);
        return view('admin.users.edit', compact('users'));
    }

    public function update_usuarios(StoreUpdateUsers $request, $id)
    {

        if (!$users = User::find($id)) {
            return redirect()->back();
        }

        $users->update($request->all());

        return redirect()
            ->route('listar.usuarios')
            ->with('message', 'Atualizado com sucesso');
    }






    public function update_servicos(StoreUpdateServicos $request, $id)
    {

        if (!$servicos = servicos::find($id)) {
            return redirect()->back();
        }

        $data = $request->all();

        if ($request->image->isValid())
            if (Storage::exists($servicos->image))
                Storage::delete($servicos->image);


        $nameFile = Str::of($request->titulo_item)->slug('-') . '.' . $request->image->getClientOriginalExtension();

        $image = $request->image->storeAs('servicos', $nameFile);
        $data['image'] = $image;

        $servicos->update($data);
  
        return redirect()
            ->route('listar.servicos')
            ->with('message', 'Serviço Atualizado com sucesso');                  
    }


   



}
