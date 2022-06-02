<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentControler extends Controller
{

    function display(){
    return view('students' , [
            "list" => student::all()
        ]);
    }
}
