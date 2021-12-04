<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    //
    function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]); //get all the product data
    }

    function detail($id)
    {
        $data =  Product::find($id);
        return view('detail', ['products' => $data]);
    }

    function search(Request $req)
    {
        // return $req->input();
        $data = Product::where('title', 'like', '%'.$req->input('query').'%')->get();
        return $data;
    }

    function add_to_cart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->users_id=$req->session()->get('user')['id'];
            $cart->products_id = $req->products_id;
            $cart->save();
            return redirect('/login');
        }
        else
        {
            return redirect('/login');
        }
    }

    static function cartItem() //FOR GETTING CART TOTAL
    {
        $userId = Session::get('user')['id'];
        return Cart::where('users_id', $userId)->count();
    }

    function cartList()
    {
        // return "COBA";
        $userId = Session::get('user')['id'];

        $products = DB::table('cart')
        ->join('products', 'cart.products_id', '=', 'products.id')
        ->where('cart.users_id', $userId)
        ->select('products.*', 'cart.id as cart_id')
        ->get();

        return view('cartlist', ['products'=>$products]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    // function totalPrice()
    // {
    //     // return "COBA";
    //     $userId = Session::get('user')['id'];

        

    //     return view('cartlist', ['products'=>$price]);
    // }
}
