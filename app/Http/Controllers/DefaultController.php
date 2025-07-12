<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DefaultController extends Controller
{
    //
    public function home()
    {
        return view("home");
    }

    public function doplusjaurney()
    {
        return view(view: "doplusjaurney");

    }

    public function ourobjective()
    {
        return view(view: "ourobjective");
    }

    public function dtpleducationerp()
    {
        return view(view: "dtpleducationerp");
    }

    public function webdesign()
    {
        return view(view: "webdesign");
    }
    public function development()
    {
        return view(view: "development");
    }

    public function mobileapplication()
    {
        return view(view: "mobileapplication");
    }

    public function erpdevelopment()
    {
        return view(view: "erpdevelopment");
    }


    public function contact()
    {
        return view(view: "contact");
    }

    public function showLoginForm()
    {
        return view(view: "login");
    }

    public function signup()
    {
        return view('signup');
    }

    public function login(Request $request)
    {

        $credentials = $request->validate([
            'type' => 'required',
            'mobile' => 'required|digits:10',
            'password' => 'required',
        ]);

        return back()->withErrors([
            'error' => 'Please enter valid login details.',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return $request->all();
            // return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'error' => 'Please enter valid login details.',
        ]);


    }

    public function register(Request $request)
    {

        $request->validate([
            'type' => 'required',
            'company' => 'required|string|max:50',
            'name' => 'required|string|max:50',
            'email' => 'required|email',
            'mobile' => 'required|digits:10',
            'address' => 'required|string',
        ]);


        $user = new User();
        $user->type = $request->type;
        $user->company = $request->company;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->website = $request->website;
        $user->save();

        return back()->with([
            'success' => 'Form has been submitted successfully.',
        ]);

    }
}
