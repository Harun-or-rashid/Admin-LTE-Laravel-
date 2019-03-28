<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
      return view('index');
    }

    public function show()
    {
        return view('welcome');
    }


}
