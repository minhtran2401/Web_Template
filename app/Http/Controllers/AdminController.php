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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin/dashboard');
    }

    function email()
    {
        return view('admin/app/email');
    }

    function dashboard()
    {
        return view('admin/dashboard');
    }

    function chatapp()
    {
        return view ('admin/app/chatapp');
    }

    function lich()
    {
        return view ('admin/app/calendar');
    }
    
}
