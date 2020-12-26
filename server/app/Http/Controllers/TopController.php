<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Agent;

class TopController extends Controller
{
    public function index()
    {
        Agent::isMobile() ? $devise_judge = 'mobile' : $devise_judge = 'PC';

        return view('top.index', compact('devise_judge'));
    }
}
