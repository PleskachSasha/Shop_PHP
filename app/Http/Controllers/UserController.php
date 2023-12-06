<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getSignin(){
        return view('user.signin');
    }

    public function postSignin(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt(['name' => $request['name'], 'password' => $request['password']])){
            return redirect()->route('user.adminProduct');
        }
        return redirect()->back();
    }

    public function getAdminProduct() {
        $products = Product::all();
        return view('shop.admin_index', ['products' => $products]);
    }

    
}
