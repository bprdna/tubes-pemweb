<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seminar;
use App\User;

class WelcomeController extends Controller
{
    public function index(){
        $seminar = Seminar::get();
        return view('welcome', ['seminar' => $seminar]);
    }
}
