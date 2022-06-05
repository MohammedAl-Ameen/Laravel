<?php

namespace App\Http\Controllers;


use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;


class studentControler extends Controller
{

    function display(){
        return view('student' , [
                "list" => student::latest()->filter(request(['id' , 'search']))->SimplePaginate(4)
            ]);
    }

    public function create(){
        return view('create');
    }


    public function store(Request $request){
    $form = $request->validate([
        'name' => 'required',
        'email' => ['required' , rule::unique('students' , 'email') , 'email']
    ]);

    Session::flash('message' , 'Account created successfully!');
    
    student::create($form)->with('message' , 'Account created successfully!');


    // student::destroy($form);
    
    return redirect('/');
}

public function delete(student $student){
    $student->delete();
    return redirect('/student');
}


public function show(student $student){
    return view('edit', ['student' => $student]);
}


public function update(Request $request , student $student){
    $form = $request->validate([
        'name' => 'required',
        'email' => 'required'
    ]);

    dd($student);
    $student->create($form);


    // student::destroy($form);
    
    return redirect('/student');
}

}



