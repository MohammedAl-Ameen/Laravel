<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControler extends Controller
{
    function getdata(){
        $data =
        [["title" => "Title1",
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
        ]

];
        return view("home" , ["data" => $data]);
    }
}
