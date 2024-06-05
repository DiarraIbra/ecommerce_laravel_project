<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\SUpport\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Cart;
use App\Models\Order;
use Stripe;
use Session;
use App\Models\Contact;
class HomeController extends Controller
{
    public function index(){
        $user = User::where('usertype','user')->get()->count();
        $product = Product::all()->count();
        $order = Order::all()->count();
        $delivered = Order::where('status','Delivered')->get()->count();
        return view('admin.index',compact('user','product','order','delivered'));
    }
    public function home(){
        $product= Product::all();

        if(Auth::id()){

            $user = Auth::user();
            $userid = $user->id;
    
            $count = Cart::where('user_id',$userid)->count();
        }
        else{
            $count = '';
        }

        

        return view('home.index',compact('product','count'));
    }
    public function login_home(){
        $product= Product::all();
        if(Auth::id()){

            $user = Auth::user();
            $userid = $user->id;
    
            $count = Cart::where('user_id',$userid)->count();
        }
        else{
            $count = '';
        }
        return view('home.index',compact('product','count'));
    }
    public function product_details($id){

        $data = Product::find($id);

        if(Auth::id()){

            $user = Auth::user();
            $userid = $user->id;
    
            $count = Cart::where('user_id',$userid)->count();
        }
        else{
            $count = '';
        }

        return view('home.product_details',compact('data','count'));
    }
    public function add_cart($id){
        $product_id = $id;
        $user = Auth::user();
        $user_id = $user->id;

        $data = new Cart;
        $data->user_id = $user_id;
        $data->product_id = $product_id;
        $data->save();
        toastr()->timeOut(10000)->closeButton()->addSuccess('Product Added to the Cart Successfully');
        return redirect()->back();



    }
    public function mycart(){

        if(Auth::id()){
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id',$userid)->count();

            $cart = Cart::where('user_id',$userid)->get();
        }
        return view('home.mycart',compact('count','cart'));
    }
    public function deleteCart($id)
    {
        $cart = Cart::find($id);
        if ($cart) {
            $cart->delete();
            toastr()->timeOut(10000)->closeButton()->addSuccess('Product removed from cart Successfully');
        return redirect()->back();
        } else {
            return redirect()->back()->with('error', 'Product not found in cart.');
        }
    }
    public function comfirm_order(Request $request){
        $name = $request->name;
        $address = $request->address;
        $phone = $request->phone;

        $userid = Auth::user()->id;

        $cart = Cart::where('user_id',$userid)->get();

        foreach($cart as $carts){

            $order = new Order();
            $order->name=$name;
            $order->rec_address = $address;
            $order->phone = $phone;
            $order->user_id = $userid;

            $order->product_id = $carts->product_id;
            $order->save();
          
        }

        $cart_remove = Cart::where('user_id',$userid)->get();
        foreach($cart_remove as $remove){

            $data = Cart::find($remove->id);

            $data->delete();
        }
        toastr()->timeOut(10000)->closeButton()->addSuccess('Product Ordered Successfully');
        return redirect()->back();
        
    }

    public function shop() {
        $count = Cart::count(); 
        $product = Product::all(); 
        return view('home.shop', compact('product', 'count'));
    }
    public function contact(Request $request){
       $contact = new Contact;
       $contact->name= $request->name;
       $contact->email= $request->email;
       $contact->phone= $request->phone;
       $contact->message= $request->message;
       $contact->save();

       return redirect()->back()->with('message','Message Sent Successfully');
    }
    public function why()
    {
        $user = auth()->user();
        $count = 0;

        if ($user) {
            // If you have a Cart model
            $count = Cart::where('user_id', $user->id)->count();

            // Or if you're using session
            // $count = session()->get('cart', collect())->count();
        }

        return view('home.why', compact('count'));
    }
    public function testimonial(){
        $count = Cart::count(); 
       
        return view('home.testimonial', compact('count'));
    }
    public function contacts(){
        $count = Cart::count(); 
        return view('home.contacts',compact('count'));
    }
    public function myorders(){
        $user = Auth::user()->id;

        $count = Cart::where('user_id',$user)->get()->count();
        $order = Order::where('user_id',$user)->get();

        return view('home.order',compact('count','order'));
    }
    public function printe_pdf($id){
        $data = Order::find($id);
        $pdf = Pdf::loadView('home.invoice',compact('data'));
        return $pdf->download('orders_client.pdf');
    }
    public function stripe($value)
    {
        return view('home.stripe',compact('value'));
    }
    public function stripePost(Request $request, $value)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $value * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from complete" 
        ]);
      
        $name = Auth::user()->name;
        $phone = Auth::user()->phone;
        $address = Auth::user()->address;
        $userid = Auth::user()->id;

        $cart = Cart::where('user_id',$userid)->get();

        foreach($cart as $carts){

            $order = new Order();
            $order->product_id = $carts->product_id;
            $order->name=$name;
            $order->rec_address = $address;
            $order->phone = $phone;
            $order->user_id = $userid;
            $order->payment_status ="paid";
           
            $order->save();
          
        }

        $cart_remove = Cart::where('user_id',$userid)->get();
        foreach($cart_remove as $remove){

            $data = Cart::find($remove->id);

            $data->delete();
        }
        toastr()->timeOut(10000)->closeButton()->addSuccess('Product Ordered Successfully');
        return redirect('mycart');
    }
}
