<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;
use App\Helpers\UtilsHelper;

class OrganizationController extends Controller
{
    //
    public function index()
    {
        $organizations = Organization::with('module')->get();
        $products = UtilsHelper::PRODUCTS;
        return view('organizations')->with(['organizations' =>$organizations, 'products' => $products]);
    }

    public function organization()
    {
        return view('organization');
    }

    public function store(Request $request)
    {
        $request->validate([
            'module_id' => 'required|exists:modules,id',
            'product_id' => 'required',
            'company' => 'required|string|max:50',
            'name' => 'required|string|max:50',
            'email' => 'required|email',
            'mobile' => 'required|digits:10',
            'address' => 'required|string',
        ]);


        $user = new Organization();
        $user->user_id = auth()->user()->id;
        $user->product_id = $request->product_id;
        $user->module_id = $request->product_id;
        $user->company = $request->company;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->save();

        return back()->with([
            'success' => 'New organization has been submitted successfully.',
        ]);
    }
}
