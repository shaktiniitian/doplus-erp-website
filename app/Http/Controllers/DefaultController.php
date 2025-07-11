<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    //
    public function home(){
        return view("home");
    }

    public function doplusjaurney() { 
        return view (view: "doplusjaurney");

}

public function ourobjective(){
    return view (view:"ourobjective");
}

public function dtpleducationerp(){
    return view (view:"dtpleducationerp");
}

public function webdesign(){
    return view (view:"webdesign");
}
public function development(){
    return view (view:"development");
}

public function mobileapplication(){
    return view (view:"mobileapplication");
}

public function erpdevelopment(){
    return view (view:"erpdevelopment");
}


public function contact(){
    return view (view:"contact");
}

public function login(){
    return view (view:"login");
}
}
