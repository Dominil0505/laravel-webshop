<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    function index(){

        // összes terméket megkapom ami az adatbázisban van
        $data = Product::all();

        // Tömbe helyezés, hogy a view elérje az adatokat
        return view('product', ['products' => $data]);
    }

    function detail($id){
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }

    function addToCart(Request $req){


        // Ha a felhasználó be van jelentkezve, akkor vissza adja hogy hello, ha nincs akkor oda dobja a bejelentkezés oldalra
        if($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();

            return redirect('/');
        }
        else {
            return redirect('/login');
        }
    }

    static function cartItem(){
    $userId = Session::get('user')['id'];
    return Cart::where('user_id', $userId)->count();
    }

    function showCart(){
        return view('cart');
    }
}
