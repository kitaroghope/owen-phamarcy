<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

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
        // if (Auth::user()->hasVerifiedEmail()) {
        //     return view('home');
        // } else {
        //     Auth::user()->sendEmailVerificationNotification();
        //     return redirect()->route('verification.notice');
        // }

        return view('home');
        
    }
}
