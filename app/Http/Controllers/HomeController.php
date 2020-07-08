<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Seminar;
use App\User;
use App\Seminar_User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $seminar = Seminar::get();
        return view('home', ['seminar' => $seminar]);
    }

    public function daftar($id)
    {
        $userId = Auth::user()->id;

        Seminar_User::create([
            'seminar_id' => $id,
            'user_id' => $userId
        ]);

        return redirect('/home');
    }
}
