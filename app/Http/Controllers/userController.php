<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index(){
        $users = User::all();
        return view('User', compact('users'));
    }

    public function store(Request $request){
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        return redirect()->route('uhome');
    }

    public function show($id){
	    $user = User::findOrFail($id);
	    return view('ViewUser', compact('user'));
    }

    public function edit($id){
	    $user = User::findOrFail($id);
	    return view('EditUser', compact('user'));
    }

    public function update(Request $request, $id){
	    $user = User::findOrFail($id);
	    $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        return redirect()->route('uhome');

    }

    public function destroy($id){
	    $user = User::findOrFail($id);
	    $user->delete();

	    return redirect()->route('uhome');
    }
}