<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function auth(Request $request){
    $validate = $request->validate([
        'email'=>['required','email'],
        'password'=>['required']
    ]);
    if (Auth::attempt($validate)){
        return redirect('/user');
    }
    return redirect()->back()->with('pesanLogin', 'MAAF LOGIN ANDA GAGAL'); 
    }
    public function user(){
        // $data['user'] = User::all();
        $data['product'] = product::all();
        // $data['total_produk'] = $data ['produk']->count();
        // $collection = Product::all();
        // dd($collection);
        return view('template', $data);
    }
    public function detailproduk(Request $request){
       $user = auth()->user();
       $data['Product'] = Product::find($request->id);
       return view ('detailproduk', compact('user'), $data);
    }
    public function finalcheckout(){
        return view('finalcheckout');
    }

    
}
