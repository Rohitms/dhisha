<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view('welcome');
    }

    public function dhishawelcome()
    {
      return view('dhishome');
    }

    public function newdish()
    {
      return view('newdish');
    }

    public function don()
    {
      return view('donate');
    }
}
