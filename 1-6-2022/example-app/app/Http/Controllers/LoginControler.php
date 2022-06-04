<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginControler extends Controller
{
    function getdata(){

        return view("login" , ["data" => [["title" => "Title1",
        "description" => "This is a description",
        "btn" => "click1"
        ] , 
        ["title" => "Title2",
        "description" => "This is a description",
        "btn" => "click2"
    ],
    ["title" => "Title3",
        "description" => "This is a description",
        "btn" => "click3"
        ]]]);
    }
}
