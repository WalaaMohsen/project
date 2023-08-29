<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\models\note_user;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use App\Models\cart;
use App\Models\users;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    // show Home page
    public function show_home(){
        return view('home');

    }
    // show  all product page
    public function show_product() {
        $myproducts=product::all();
        /*if($myproducts->hasfile('image')){
            $file = $myproducts->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move(public_path('image/'),$filename);
        }*/

        return view('product',compact('myproducts'));
        
    }
    // show single product page (search)
    public function showsingle_product(Request $request){
        $search = $request->search;
        $myproducts = product::where('name','LIKE',"%$search%")->get();

            return view('product',compact('myproducts'));

        } 

    // show about page
    public function show_about(){
        return view('about');

    }
    // show  contact page
    public function show_contact(){
        return view('contact');

    }
    // show form buy
    public function buy(){
        return view('buy');
    }
    public function add_cart( Request $request){
         
        $data['name'] = $request->input('name');    
        $data['email'] = $request->input('email');
        $data['phone'] = $request->input('phone');
        $data['address'] = $request->input('address');
        $data['product_name'] = $request->input('product');
        $data['quantity'] = $request->input('quantity');
        $data['price'] = $request->input('price');
        $newcart=cart::create($data);
        if(!$newcart){
        
            return redirect(route('buy'));
    
        }
        else{
            return redirect('home');    

    }

    }
    
    // show form sign user
    public function sign(){
       return view('sign');
    }
    // show sign profile user
   public function sign_user(Request $request){
    
      $users = $request->email;
      $profile = cart::where('email','LIKE',"%$users%")->get();

            return view('user_profile',compact('profile'));      
   }
   
    
   // show register form
    public function register_form(){
        return view('admin.register');
    }
    // show add acount user
   public function register_user(Request $request){

    $data['name'] = $request->input('Name');    
    $data['email'] = $request->input('email');
    $data['password'] = $request->input('pass');
    $data['confirm_pass'] = $request->input('confirm');
    $data['photo'] = $request->input('image');

    $user=users::create($data);
    if(!$user){
        
        return redirect(route('register_form'))->with("error"," Register is failed");

    }
    else{
        return redirect(route('home'))->with("success"," Register is success");
}
   }

    
    // show send notes users (comments)
    public function notes(Request $request){
        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
        $data['phone'] = $request->input('phone');
        $data['notes'] = $request->input('notes');

        $note=note_user::create($data);
        if(!$note){
            return redirect(route('contact'))->with("error"," Send is failed");

        }
        else{
            return redirect(route('contact'))->with("success"," Send is success");
    }
}

}