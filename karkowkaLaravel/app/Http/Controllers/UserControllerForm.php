<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllerForm extends Controller
{
    public function ShowData(Request $req){
        $req->validate([
            'imie' => "min:2 | max:10 | required",
            'email' => "min:5 | max:50 | email | required"
        ],[
            'imie.min'=>"wpisz dluzsze imie",
            'imie.max'=>"wpisz krotsze imie",
            'imie.required'=>"Pole wymagane",
            'email.min'=>"wpisz dluzszy email",
            'email.max'=>"Wpisz krotszy email",
            'email.required'=>"Pole wymagane",
            'email.email'=>"Wpisz email"
        ]
        );
        return $req->input();
    }
}
