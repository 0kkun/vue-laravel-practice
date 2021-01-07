<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getActionData()
    {
        $action_data = [
            1 => ['count'=>100, 'text' => 'aaaa'],
            2 => ['count'=>200, 'text' => 'bbbb'],
            3 => ['count'=>300, 'text' => 'cccc']
        ];

        return json_encode($action_data);
    }
}
