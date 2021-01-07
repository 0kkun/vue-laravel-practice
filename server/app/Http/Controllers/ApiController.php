<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getActionCount()
    {
        $action_counts = [
            1 => ['count'=>100],
            2 => ['count'=>200],
            3 => ['count'=>300]
        ];

        return json_encode($action_counts);
    }
}
