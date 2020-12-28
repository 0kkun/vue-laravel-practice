<?php

use App\Models\ActionTemplate;
use Illuminate\Database\Seeder;
use Faker\Factory;

class ActionTemplateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ActionTemplate::class, 30)->create();
    }
}
