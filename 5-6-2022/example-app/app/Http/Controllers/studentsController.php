<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class studentsController extends Controller
{

    function index(){
        $studnet = student::latest()->SimplePaginate(5);
        return view("index" ,["list" => $studnet]);
    }

    function create(){
        return view("create");
    }

    function store(Request $request){

        $form = $request->validate([
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "age" => "required"
        ]);

        student::create($form);

        return redirect('/');


    }


    function delete(student $student){
        $student->delete();
        return redirect('/');
    }


    function edit(student $student){
        return view("edit" , compact("student"));
    }

    function update(Request $request , student $student){
        $form = $request->validate([
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "age" => "required"
        ]);

        $student->update($form);

        return redirect("/");
    }

}
