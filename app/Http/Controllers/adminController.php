<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Auth;
use App\Models\admins;
use App\Models\orders;
use App\Models\cart;
use App\Models\product;
use App\Models\note_user;

class adminController extends Controller
{
   
        
       
    // page for show login admin form
    public function login_form(){
        return view('admin.login');
    } 
    // page show enter profile admin
    public function admin_login(Request $request){
        $gmail = $request-> gmail;
        $user_data = admins::where('admin_gmail', $gmail )->first();      
        if($user_data){
            return view('admin.profile');
        }
        return back()->with("error","Worng login Details");

    }

    // function show all user data for admin
    public function show(){
            $data = users::all();
            return view('admin.show_user',compact('data'));
        }
    
    // function show delete user data
    public function destroy($id)
    {
        $Users = users::find($id);
        $Users->delete();
        return redirect()->route('show');
    }
    // function show update user data
    function update($id){
        $data=users::FindOrFail($id);
        return view('admin.update',compact('data'));
    }
    function edit($id,Request $request){
        $data=users::find($id);
        $data->update($request->all());
        return redirect()->route('show');
    }
    // function show all orders for admin    
    public function show_order(){
        $data = orders::all();
        return view('admin.show_order',compact('data'));
    }
    // function add new order using admin
    public function show_form_add() {
        return view('admin.show_form_add');
        
    }
    public function add_order(Request $request) {
        $data['order_status'] = $request->input('order_status');    
        $data['quantity'] = $request->input('quantity');
        $data['total'] = $request->input('total');
        $data['register_id'] = $request->input('register_id');
        orders::create($data);
        return  redirect()->route('show_order');

    }
    // function show delete order using admin
    public function destroy_order($id)
    {
        $Users = orders::find($id);
        $Users->delete();
        return redirect()->route('show_order');
    }
    // function show update order data using admin
    function update_order($id){
        $data=orders::FindOrFail($id);
        return view('admin.update_order',compact('data'));
    }
    function edit_order($id,Request $request){
        $data=orders::find($id);
        $data->update($request->all());
        return redirect()->route('show_order');
    }
    // function show all carts for admin
    public function show_carts(){
        $data = cart::all();
        return view('admin.show_carts',compact('data'));
    }
    // function show all products for admin
    public function show_products(){
        $data = product::all();
        return view('admin.show_products',compact('data'));
    }
    // function show add new product using admin
    public function show_form_add_product() {
        return view('admin.show_form_add_product');
        
    }
    public function add_product(Request $request) {
        /*if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move(public_path('images/'),$filename);*/

            $data['name'] = $request->input('name');    
            $data['price'] = $request->input('price');
            $data['comments'] = $request->input('comments');
            $data['image'] = $request->input('image');
            product::create($data);
        return  redirect()->route('show_products');

    }

    // function show delete product using admin
    public function destroy_product($id)
    {
        $Users = product::find($id);
        $Users->delete();
        return redirect()->route('show_products');
    }
    // function show update product using admin
    function update_product($id){
        $data=product::FindOrFail($id);
        return view('admin.update_product',compact('data'));
    }
    function edit_product($id,Request $request){
        $data=product::find($id);
        $data->update($request->all());
        return redirect()->route('show_products');
    }
    // function show reviewe user
    public function notes_user(){
        $data = note_user::all();
        return view('admin.show_reviewes',compact('data'));
    }
    // function show delete notes using admin
    public function destroy_notes($id)
    {
        $Users = note_user::find($id);
        $Users->delete();
        return redirect()->route('notes_user');
    }

    }

