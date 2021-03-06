<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.admin');
    }
    
    public function cours(){
        return view('admin.cours');
    }
    public function partie(){
        return view('admin.partie');
    }
    public function td(){
        return view('admin.td');
    }
    public function tp(){
        return view('admin.tp');
    }
    public function video(){
        return view('admin.video');
    }
    public function quiz(){
        return view('admin.quiz');
    }




}
