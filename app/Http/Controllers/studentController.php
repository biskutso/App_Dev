<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index(){
        $students = Students::all();
        return view('studentView', compact('students'));
    }

    public function store(Request $request){
        $students = Students::create([
            'fname'=>$request->fname,
            'mname'=>$request->mname,
            'lname'=>$request->lname,
            'sname'=>$request->sname,
            'gender'=>$request->gender,
            'bdate'=>$request->bdate,
            'email'=>$request->email,
        ]);

        return redirect()->route('home');
    }

    public function show($id){
	    $student = Students::findOrFail($id);
	    return view('studentInfo', compact('student'));
    }

    public function edit($id){
	    $student = Students::findOrFail($id);
	    return view('EditStudent', compact('student'));
    }

    public function update(Request $request, $id){
	    $student = Students::findOrFail($id);
	    $student->update([
            'fname'=>$request->fname,
            'mname'=>$request->mname,
            'lname'=>$request->lname,
            'sname'=>$request->sname,
            'gender'=>$request->gender,
            'bdate'=>$request->bdate,
            'email'=>$request->email,
        ]);

        return redirect()->route('home');

    }

    public function destroy($id){
	    $student = Students::findOrFail($id);
	    $student->delete();

	    return redirect()->route('home');
    }
}
