<?php

namespace App\Http\Controllers;
use \App\Models\{Cart, CartItem, Product};
use Auth, DB;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function add_to_cart(Request $request)
    {
        $request->validate([
            'productId' => 'required',
            'qty' => 'required|numeric|min:1',
        ]);
    
        if (Auth::check()) {
            $product_id = decrypt_value($request->productId);
            $qty = $request->qty;
    
            $main_product = Product::findOrFail($product_id);
    
            $exists_cart = Cart::where('user_id', Auth::id())->where('status', 0)->first();
    
            if ($exists_cart) {
                $product_present = CartItem::where('cart_id', $exists_cart->id)->where('product_id', $product_id)->first();
    
                if ($product_present) {
                    // Update existing cart item
                    $product_present->qty += $qty;
                    $product_present->price += $main_product->sale_price * $qty;
                    $product_present->save();
                } else {
                    // Create new cart item
                    $this->create_cart_item($exists_cart->id, $product_id, $qty, $main_product->sale_price * $qty);
                }
    
                // Update cart total
                $exists_cart->total = CartItem::where('cart_id', $exists_cart->id)->sum('price');
                $exists_cart->save();
            } else {
                // Create new cart and cart item
                $new_cart = new Cart;
                $new_cart->user_id = Auth::id();
                $new_cart->total = $main_product->sale_price * $qty;
                $new_cart->save();
    
                $this->create_cart_item($new_cart->id, $product_id, $qty, $main_product->sale_price * $qty);
            }
    
            return response()->json(['message' => 'Product added to cart successfully!', 'cart_count' => $this->cart_count()], 200);
        } else {
            return response()->json(['message' => 'User not authenticated!'], 401);
        }
    }
    
    private function create_cart_item($cart_id, $product_id, $qty, $price)
    {
        $cart_item = new CartItem();
        $cart_item->cart_id = $cart_id;
        $cart_item->product_id = $product_id;
        $cart_item->qty = $qty;
        $cart_item->price = $price;
        $cart_item->save();
    }

    public function cart_count() {
        $totalQty = DB::table('cart_items')
                      ->join('carts', 'cart_items.cart_id', '=', 'carts.id')
                      ->where('carts.user_id', Auth::id())
                      ->sum('cart_items.qty');
        
        return $totalQty;
    }
    
    public function manage_cart_product(Request $request){
        $request->validate([
            'id' => 'required',
            'action' => 'required',
        ]);
    
        $cart_item_id = decrypt_value($request->id);
        $action = $request->action;
        $cart_item = CartItem::find($cart_item_id);
    
        if (!$cart_item) {
            // Handle the case where the cart item does not exist
            return response()->json(['error' => 'Cart item not found'], 404);
        }
    
        if($action == 'increase') {
            $cart_item->qty += 1;
        } 
        else if($action == 'decrease') {
            if ($cart_item->qty > 1) {
                $cart_item->qty -= 1;
            } else {
                return response()->json(['error' => 'Quantity cannot be less than 1'], 400);
            }
        } 
        else if($action == 'remove') {
            $cart_item->delete();
            $this->update_cart_total($cart_item->cart_id);
            return $this->send_cart_view();
           
    
        } else {
            return response()->json(['error' => 'Invalid action'], 400);
        }
    
        $cart_item->price = $cart_item->product->sale_price * $cart_item->qty;
        $cart_item->save();
        $this->update_cart_total($cart_item->cart_id);
        return $this->send_cart_view();

    }
    
    public function update_cart_total($id){
        $updated_total = CartItem::where('cart_id', $id)->sum('price');
        $cart = Cart::find($id);
    
        if (!$cart) {
            // Handle the case where the cart does not exist
            return response()->json(['error' => 'Cart not found'], 404);
        }
    
        $cart->total = $updated_total;
        $cart->save();
    }

    public function send_cart_view(){
        $user_cart = Cart::with('cart_items')->with('cart_items.product:id,product_name,product_image,sale_price')->where('user_id',Auth::id())->first();
        $html =  view('reuseables.cart',compact('user_cart'))->render();

        return response()->json(['success' => 'Cart updated successfully','html' => $html, 'cart_count' => $this->cart_count()]);
    }
    
}
