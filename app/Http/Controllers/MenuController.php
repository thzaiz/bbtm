<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\SubMenu;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewMenuView()
    {
        $menu = Menu::with(array(
            'user',
            'subMenu' => function($query) {
                $query->where('deleted', 0);
            }
            
            ))->get();
        $collection = collect($menu);
        $filtered = $collection->reject(function ($name) {
            return $name->deleted == 1;

    //   }) ->sortBy('sort_order');
    }) ->sortBy('sort_order');

    return view ('menuViewAdmin', compact('filtered'));
//return $filtered;
    }
    
    
    public function addMenuView()
    {
        return view ('menuAddAdmin');
    }

    public function addMenuInsert(Request $request)

    {
        $this->validate($request, [
            'menu_name' => 'required'
        ]);
        $menu = new Menu($request->all());
        $menu->user_id = Auth::id();
        $menu->save();
        return \Redirect::to('/menuViewAdmin');

    }

    public function editMenu(Menu $id)
    {
        return view('menuEditAdmin', compact('id'));
    }

    public function updateMenu(Request $request, Menu $id)
    {
        $id->update($request->all());
        return \Redirect::to('/menuViewAdmin');
    }

    public function editSubMenu(SubMenu $id)
    {
        return view('subMenuEditAdmin', compact('id'));
    }

    public function updateSubMenu(Request $request, SubMenu $id)
    {
        $id->update($request->all());
        return \Redirect::to('/menuViewAdmin');
    }

    public function addSubMenuView(Menu $id)
    {
        //return $id;
        return view ('subMenuAddAdmin', compact('id'));
    }

    public function addSubMenuInsert(Request $request, Menu $id)

    {
     //   return $id['id'];

        $this->validate($request, [
            'sub_menu_name' => 'required'
        ]);
        $subMenu = new SubMenu($request->all());
        $subMenu->user_id = Auth::id();
        $subMenu->menu_id = $id['id'];
        $subMenu->save();
        return \Redirect::to('/menuViewAdmin');

    }
}
