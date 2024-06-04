<?php

namespace App\Http\Controllers;
use \App\Models\{Category, Product, Cart};
use Illuminate\Http\Request;
use Auth;
class FrontController extends Controller
{
    public function index(){
        return view('index');
    }

    public function products($category_slug = null, $product_slug = null){ 
        $categories = Category::get();
        // \Log::alert("message",[$product_slug]);
        if(!is_null($product_slug)){
            $product = Product::with('category')->where('product_slug', $product_slug)->firstOrFail();
            $similar_products = Product::where('category_id',$product->category->id)->get();
            $type = 'single';
            return view('products.single_product',compact('categories','product','type','similar_products'));
        }

        if(is_null($category_slug) && is_null($product_slug)){
            $category_with_products = Category::with('products')->firstOrFail();
        }
        elseif(!is_null($category_slug) && is_null($product_slug)){
            $category_with_products = Category::with('products')->where('category_slug',$category_slug)->firstOrFail();
        }

        $products = $category_with_products->products()->paginate(6);
     
        return view('products.products',compact('categories','category_with_products','products'));
    }

    public function search_products(Request $request){
        $perPage = 3;
        $type = "search-product";
        $page = $request->input('page', 1);
    
        $all_products = Product::where('product_name', 'LIKE', "%{$request->input('query')}%")
            ->paginate($perPage, ['*'], 'page', $page);
    
        if (count($all_products) > 0 && !empty($request->input('query'))) {
            $message = "Products related to '".$request->input('query')."' ";
        } else {
            $all_products = Product::paginate($perPage, ['*'], 'page', $page);
            $message = "No Product found related to '".$request->input('query')."' . Here are some top rated products:";
        }
    
        $html = view('reuseables.searched_products',compact('all_products','message','type'))->render();
        return response()->json(['html' => $html, 'next_url' => $all_products->nextPageUrl()]);
    }

    public function cart(){
        $user_cart = Cart::with('cart_items')->with('cart_items.product:id,product_name,product_image,sale_price')->where('user_id',Auth::id())->first();
        return view('cart',compact('user_cart'));
    }

   
}
