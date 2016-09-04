<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Service;

use App\User;

use Illuminate\Support\Facades\Auth;


class ServicesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    public function view()
    {

        $service = Service::with(array(
            'user',
            'subMenu' => function($query) {
                $query->where('deleted', 0);
            }))->get();
        $collection = collect($service);
        $filtered = $collection->reject(function ($name) {
            return $name->deleted == 1;

            //   }) ->sortBy('sort_order');
        }) ->sortBy('sort_order');

        //  return $filtered;
        return view ('servicesViewAdmin', compact('filtered'));


        //     return 'products';
//return $filtered;
    }

    public function add()
    {
        return view ('servicesAddAdmin');
    }


    public function addInsert(Request $request)

    {
        $this->validate($request, [
            'service_name' => 'required'
        ]);
        $service = new Service($request->all());
        $service->user_id = Auth::id();
        $service->save();
        return \Redirect::to('/servicesViewAdmin');

    }

    public function edit(Service $id)
    {
        return view('servicesEditAdmin', compact('id'));
    }


    public function update(Request $request, Service $id)
    {
        $id->update($request->all());
        return \Redirect::to('/servicesViewAdmin');
    }
}
