<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class formController extends Controller
{
    public function view()
    {
        return view('form1');
    }
    public function view2()
    {
        return view('form2');
    }

    public function view3()
    {
        return view('form3');
    }

}