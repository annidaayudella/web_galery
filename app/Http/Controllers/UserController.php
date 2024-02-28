<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\facades\Auth;

class UserController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view('login');
        
    }
    public function saveRegister(Request $request){
        $data = $request->validate(
        [
            'name'=>'required',
            'username'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]
        );
        $simpan=[
           'name'=>$data['name'],
           'username'=>$data['username'],
           'email'=>$data['email'],
           'password'=>bcrypt($dsta['password']),
        ];
        user::create($simpan);
        return redirect('/');
    }
    public function proseslogin(Request $request){
        $data = $request->validate([
        'username'=>'required',
        'password'=>'required',
        ]);
        $data = $request->only(['username','password']);
        if (Auth::attempt($data)) {
            return redirect('galeri');
        }else{
            return redirect('/');
        }
    }
    /**

    *
    *@return \Illuminate\Http\Response
    */
    public function register()
    {
        return view('register');
    }
    
    /**
    *store a newly created resouce in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @return \ Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        //
    }
    
    /**
    * Display the spacified resource.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        //
    }
    
    /**
    * show the form for editing the specified resource.
    *
    * @param int @id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        //
    }
    
    /**
    *
    * @param \Illuminate\Http\Request $request
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        //
    }
    /**
    *Remove the specified resouce form storage.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    
}