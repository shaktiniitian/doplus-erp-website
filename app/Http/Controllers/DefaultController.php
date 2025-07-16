<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        if (auth()->user()) {
            return redirect()->to(url()->previous());
        }
        return view(view: "login");
    }

    public function signup()
    {
        return view('signup')->with('user', '');
    }

    public function login(Request $request)
    {


        $credentials = $request->validate([
            'type' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if ($request->type == 2) {
                return redirect()->intended('/organizations');
            }
        }

        return back()->withErrors([
            'error' => 'Please enter valid login details.',
        ]);


    }

    public function register(Request $request)
    {

        $request->validate([
            // 'type' => 'required',
            'company' => 'required|string|max:50',
            'name' => 'required|string|max:50',
            'email' => 'required|email',
            'mobile' => 'required|digits:10',
            'address' => 'required|string',
        ]);

        if (auth()->user()) {
            $user = User::find(auth()->user()->id);
        } else {
            $user = new User();
            $user->password = Hash::make($request->mobile);
            $user->type = $request->type;
        }



        $user->company = $request->company;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->website = $request->website;
        $user->save();

        return back()->with([
            'success' => auth()->user() ? 'Profile has been updated successfully.' : 'Form has been submitted successfully.',
        ]);

    }

    public function profile()
    {

        $user = auth()->user();
        return view('signup')->with('user', $user);
    }
}
