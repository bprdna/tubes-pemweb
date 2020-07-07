<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Seminar;
use App\User;

class SuController extends Controller
{
    public function index(){
        $seminar = Seminar::get();
        return view('seminar', ['seminar' => $seminar]);
    }
}
