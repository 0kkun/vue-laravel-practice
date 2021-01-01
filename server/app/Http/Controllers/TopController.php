<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Facades\Agent;
use App\Models\ActionTemplate;
use App\Models\UsersAction;
use Illuminate\Support\Facades\Auth;

class TopController extends Controller
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
        $actions = collect();

        Agent::isMobile() ? $devise_judge = 'mobile' : $devise_judge = 'PC';
        $current_user = Auth::user();
        $users_actions = UsersAction::get()->where('user_id', $current_user->id);

        $action_templates = ActionTemplate::get();

        foreach ($users_actions as $index => $users_action) {
            $actions = $actions->concat( $action_templates->where('id', $users_action->action_template_id)->toArray() );
        }

        return view('Top/index', compact('devise_judge', 'actions'));
    }
}
