<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SmartFormQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('smart_form_questions')->insert([
            [
                'id' => 1,
                'content' => 'test',
                'positive' => 'ppp',
                'negative' => 'nnn',
            ],
        ]);
    }
}
