<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function index (){
        return view('about',[
            "name"=>"kafabih",
            "email"=>"nurmuhammadkafabih2003@mail.ugm.ac.id",
            "pagename"=>"About"
        ]);
    }
}
