<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubMenu;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class SubMenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
