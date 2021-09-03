<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\newsletter;
use App\Books;
use App\order;
use App\order_product;

class FrontendController extends Controller
{
    public function listpost(){
        $posts = Blog::orderBy('created_at', 'DESC')->paginate(6);
        return view('frontend.blog.list', compact('posts'));
    }

    public function post($id){
        $post = Blog::where('id', $id)->first();
        return view('frontend.blog.post', compact('post'));
    }

    public function category_post($id){
        $posts = Blog::orderBy('created_at', 'DESC')->where('category', $id)->paginate(6);
        return view('frontend.blog.list', compact('posts', 'id'));
    }

    public function category_book($id){
        $books = Books::orderBy('created_at', 'DESC')->where('categories', $id)->paginate(6);
        return view('frontend.book.list', compact('books', 'id'));
    }

    public function listbook(){
        $books = Books::orderBy('created_at', 'DESC')->paginate(16);
        return view('frontend.book.list', compact('books'));
    }

    public function book($id){
        $book = Books::where('id', $id)->first();;
        return view('frontend.book.book', compact('book'));
    }

    public function search_book(Request $request){
        $books = Books::where('name', 'LIKE' , '%'. $request->q . '%')->orderBy('created_at', 'DESC')->paginate(16);
        return view('frontend.book.list', compact('books'));
    }

    public function search_blog(Request $request){
        $posts = Blog::where('name', 'LIKE' , '%'. $request->q . '%')->orderBy('created_at', 'DESC')->paginate(6);;
        return view('frontend.blog.list', compact('posts'));
    }

    public function list_newsletter(){
        $newsletter = newsletter::paginate(20);
        return view('backend.newsletter.list', compact('newsletter'));
    }

    public function delete_newsletter($id){
        $newsletter = newsletter::where('id', $id)->delete();
        $newsletter = newsletter::orderBy('created_at', 'DESC')->paginate(20);
        return view('backend.newsletter.list', compact('newsletter'));
    }

    public function newsletter_post(Request $request){
        $email = newsletter::where('email', $request->email)->first();
        if($email == null){
            $newsletter = new newsletter;
            $newsletter->name = $request->name;
            $newsletter->email = $request->email;
            $newsletter->phone = $request->phone;
            $newsletter->save();
            return view('frontend.contact')->withErrors(['Đăng ký thành công']);
        } else {
            return view('frontend.contact')->withErrors(['email này đã đăng ký']);
        }
    }

    public function addtocart(Request $request){
        // $session = session('cart');
        // if($session!=null){
        //     foreach($session as $key => $value){
        //         $cart[$key] = $value;
        //     }
        //     $cart[$key+1] = $request->id;
        //     session(['cart' => $cart]);
        // } else {
        //     session(['cart' => [$request->id]]);
        // }
        // dd(session('cart'));
        // return back();

        $session = session('cart');
        if($session!=null){
            foreach($session as $key => $value){
                $cart[$key] = $value;
            }
            $cart[$key+1] = $request->id;
            session(['cart' => $cart]);
        } else {
            session(['cart' => [$request->id]]);
        }
        $session = session('cart');
        session(['cart_df' => array_count_values($session)]);
        return back();
    }

    public function cart(){
        $session = session('cart');
        $cart = [];
        $books = [];
        $qty = [];
        if($session!=null){
            foreach($session as $key => $value){
                $cart[$key] = $value;
            }
            $qty = array_count_values($cart);
            $id = array_unique($cart);
            foreach($id as $value){
                $books[] = Books::where('id', $value)->first();
            }
        }
        // dd(session('cart_df'), session('cart'));

        return view('frontend.book.cart', compact('books', 'qty'));
    }

    public function updatecart(Request $request){
        $cart = [];
        // $cart_df = session('cart_df');
        session(['cart_df' => $request->qty]);
        $cart_df = session('cart_df');
        foreach($request->id as $key => $value){
            for($i = 0; $i < $cart_df[$value]; $i++){
                $cart[$key][$i] = $value;
            }
        }

        // dd($cart_df, $request->id);
        if(count($cart)>0){
            $cart = call_user_func_array('array_merge', $cart);
        }
        session()->forget('cart');
        session(['cart' => $cart]);

        // dd(session('cart_df'), session('cart'));
        return redirect(route('frontend.public.cart'));
    }

    public function deletecart($id){
        
    }

    public function checkout(){
        return view('frontend.book.checkout');
    }

    public function checkout_thanks(){
        return view('frontend.book.thanks');
    }

    public function checkout_post(Request $request){
        $cart_df = session('cart_df');
        if(count($cart_df)){

            $price = 0;

            foreach($cart_df as $key => $value){
                $price = $price + (Books::where('id', $key)->first()->price * $value);
            }
            
            $order = new order;
            $order->name = $request->name;
            $order->phone = $request->phone;
            $order->email = $request->email;
            $order->ls_province = $request->ls_province;
            $order->ls_district = $request->ls_district;
            $order->ls_ward = $request->ls_ward;
            $order->address = $request->address;
            $order->note = $request->note;
            $order->price = $price;
            $order->status = 0;
            $order->save();

            foreach($cart_df as $key => $value){

                $books = Books::where('id', $key)->first();
    
                Books::where('id', $key)
                    ->update([
                        'qty' => Books::where('id', $key)->first()->qty - $value,
                    ]);

                $order_product = new order_product;
                $order_product->order_id = $order->id;
                $order_product->product_id = $books->id;
                $order_product->qty = $value;
                $order_product->save();
    
            }
    
            // foreach($books as $key => $value){
            //     $order_product = new order_product;
            //     $order_product->order_id = $order->id;
            //     $order_product->product_id = $value->id;
            //     $order_product->qty = $value->id;
            //     $order_product->save();
            // }
            session()->forget('cart');
            session()->forget('cart_df');
        }

        return redirect(route('frontend.checkout.thanks'));
    }
}
