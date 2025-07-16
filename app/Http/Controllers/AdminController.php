<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function login()
    {
        return view("admin.login");
    }

       public function dashboard()
    {
        return view("admin.dashboard");

    }

    public function doLogin(Request $request)
    {

        $this->validate($request, [
            "email" => "required|email",
            "password" => "required|digits:5"
        ]);
        return $request->all();
    }

 
}
