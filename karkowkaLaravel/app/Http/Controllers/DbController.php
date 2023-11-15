<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    public function ShowTableUser(){
        return DB::table('users')
        ->select('name','email')
        ->where('nmae','=','jan')
        ->get();
    }
}
