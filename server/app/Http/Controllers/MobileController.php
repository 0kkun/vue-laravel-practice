<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Facades\Agent;

class MobileController extends Controller
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


    public function index()
    {
        Agent::isMobile() ? $devise_judge = 'mobile' : $devise_judge = 'PC';

        return view ( 'mobile.index' , compact('devise_judge') );
    }
}
