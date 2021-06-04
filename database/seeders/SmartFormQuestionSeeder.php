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
                'category_id' => 2,
                'content' => 'Выберите ваш пол?',
                'positive' => 'Мужской',
                'negative' => 'Женский',
            ],
            [
                'id' => 2,
                'category_id' => 11,
                'content' => 'Заказываете ли вы еду?',
                'positive' => 'Да',
                'negative' => 'Нет',
            ],
            [
                'id' => 3,
                'category_id' => 6,
                'content' => 'Ведёте ли вы активный образ жизни?',
                'positive' => 'Да',
                'negative' => 'Нет',
            ],
            [
                'id' => 4,
                'category_id' => 14,
                'content' => 'Увлекаетесь ли вы чтением книг?',
                'positive' => 'Да',
                'negative' => 'Нет',
            ],
            [
                'id' => 5,
                'category_id' => 7,
                'content' => 'Интересуют ли вас товары для дома?',
                'positive' => 'Да',
                'negative' => 'Нет',
            ]
        ]);
    }
}
