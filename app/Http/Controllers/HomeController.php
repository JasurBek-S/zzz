<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Products;
use App\Models\Categories;
use App\Models\Brand;
use App\Models\Menus;
use App\Models\ProductImages;
use App\Models\MenuChild;
use Hashids\Hashids;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $product_rec = Products::where(['action' => 'true'])->get();
        $category = Categories::where(['action' => 'true'])->get();
        $brands = Brand::where(['action' => 'true'])->get();
        $menu_footer = MenuChild::where(['action' => 'true'])->get();
        $productimage = ProductImages::get();
        
        return view('Home.index', compact('product_rec', 'category', 'brands', 'menu_footer', 'productimage'));
    }

    // Shop 
    public function shop()
    {
        $product_rec = Products::where(['action' => 'true'])->get();
        $category = Categories::where(['action' => 'true'])->get();
        
        if($_SERVER['QUERY_STRING'] == "list"){
            return view('Home.shop-two', compact('product_rec', 'category'));
        }else{
            return view('Home.shop', compact('product_rec', 'category'));
        }
    }

    // Product 
    public function product_tone($name)
    {
        $product_rec = Products::where(['action' => 'true', 'link' => $name])->first();
        if($product_rec)
        {
            $category = Categories::where(['action' => 'true'])->get();
            $productimage = ProductImages::get();
            $brands = Brand::where(['action' => 'true'])->get();
            
            return view('products.layout_v_one', compact('product_rec', 'category', 'brands', 'productimage'));
        }else{
          abort(404);  
        }
    }

    
    public function addToCart($id)

    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;

        } else {

            $cart[$id] = [

                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

  
    public function update(Request $request)

    {

        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

  

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

}