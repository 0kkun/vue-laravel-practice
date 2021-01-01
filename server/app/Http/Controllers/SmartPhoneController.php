<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmartPhoneController extends Controller
{
    public function index()
    {
        return view ( 'Phone.index' );
    }
}
