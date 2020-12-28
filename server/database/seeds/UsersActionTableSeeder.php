<?php

use App\Models\ActionTemplate;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersActionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::get();
        $action_templates = ActionTemplate::get();
        $now = Carbon::now();

        $param = [
            [
                'user_id' => $user[0]->id,
                'action_template_id' => $action_templates[0]->id,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'user_id' => $user[0]->id,
                'action_template_id' => $action_templates[1]->id,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'user_id' => $user[0]->id,
                'action_template_id' => $action_templates[2]->id,
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];

        DB::table('users_actions')->insert($param);
    }
}
