<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SaveUserRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveProductRequest;
use App\User;
class UserController extends Controller
{
    public function index(){
        $users = User::orderBy('name')->paginate(5);
        return view('admin.user.index',compact('users'));
    }
    public function create(){
        return view('admin.user.create');
    }
    public function store(SaveUserRequest $request){
        $data = [
            'name'  => $request->get('name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'user' => $request->get('user'),
            'password' => $request->get('password'),
            'type' => $request->get('type'),
            'active' => $request->get('active')? 1 : 0,
            'address' => $request->get('address')

        ];
        $user = User::create($data);
        $message = $user ? 'Usuario agregado!':'Usuario no agragado';
        return redirect()->route('user.index')->with('message',$message);
    }
    public function edit(User $user){
        return view('admin.user.edit',compact('user'));

    }
    public function update(Request $request,User $user){
$this->validate($request,[
    'name'=>'required|max:100',
        'last_name'=>'required|max:100',
    'email'=>'required|email|max:100',
    'user'=>'required|min:4|max:20',
    'password'=>($request->get('password')!="")? 'required|confirmed':"",
    'type'=>'required|in:user,admin'

]);
$user->name = $request->get('name');
        $user->last_name = $request->get('last_name');
        $user->email = $request->get('email');
        $user->user = $request->get('user');
        $user->type = $request->get('type');
        $user->address = $request->get('address');
        $user->active = $request->get('active')? 1:0;
        if($request->get('password')!="")$user->password=$request->get('password');
        $updated =$user->save();
        $message = $updated ? 'Usuario actualizado!':'Usuario no actualizado';
        return redirect()->route('user.index')->with('message',$message);
    }
    public function destroy(User $user){
        $deleted = $user->delete();
        $message = $deleted ? 'Usuario borrado!':'Usuario no borrado';
        return redirect()->route('user.index')->with('message',$message);
    }
}
