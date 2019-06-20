<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use App\Category;
use App\Order;
use Session;

class CartsController extends Controller
{	
    public function addToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);

        return redirect()->route('categories.show', ['category' => $product->category->id]);
    }

    public function shoppingCart() {
    	if (!Session::has('cart')) {
    		return back(); //view('products.shopping-cart', ['products' => null]);
    	}
    	$categories = Category::all();
    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);
        $data = [
            'products' => $cart->items,
            'totalPrice' => $cart->totalPrice,
            'categories' => $categories
        ];

    	return view('products.shopping-cart', $data);
    }

    public function delItem(Request $request, $id) {
    	$product = Product::find($id);
    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);
    	$categories = Category::all();

        $cart->totalQuantity -= $cart->items[$id]['quantity'];
        $cart->totalPrice -= $cart->items[$id]['price'];
    	unset($cart->items[$id]);
    	$request->session()->put('cart', $cart);
        $data = [
            'products' => $cart->items,
            'totalPrice' => $cart->totalPrice,
            'categories' => $categories
        ];

    	return view('products.shopping-cart', $data);
    }

    public function index() {
        $categories = Category::all();

        if (!Session::has('cart')) {
            return view('products.shopping-cart', ['products' => null]);
        }

        $categories = Category::all();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $data = [
            'products' => $cart->items,
            'totalPrice' => $cart->totalPrice,
            'categories' => $categories
        ];

        return view('products.order', $data);
    }

    public function store(Request $request) {
        $categories = Category::all();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $data = $request->only([
            'first_name',
            'last_name',
            'phone',
            'address',
        ]);
        $data['user_id'] = auth()->id();
        $data['total_quantity'] = $cart->totalQuantity;
        $data['total_price'] = $cart->totalPrice;

        try {
            $order = Order::create($data);
        } catch (Exception $e) {
            return back()->with('status', __('product.create_fail'));
        }
        Session::forget('cart');

        return redirect()->route('home')->with('msg', 'Dat Hang Thanh Cong');
    }
}
