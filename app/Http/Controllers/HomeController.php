<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\mobil;

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
        $user = Auth::user()->role;
        // dd($user);

        if ($user == 'admin') {
            return view('homeadmin');
        }else{

            //get posts
        $images = mobil::latest()->paginate(5);

        //render view with posts
        return view('homemember', compact('images'));
        }
    }
}
