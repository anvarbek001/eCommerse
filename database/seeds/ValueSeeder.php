<?php

use App\Value;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Qizil',
                'ru' => 'Красный'
            ]
        ]);

        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Qora',
                'ru' => 'Черный'
            ]
        ]);

        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Jigarrang',
                'ru' => 'Коричневый'
            ]
        ]);

        Value::create([
            'attribute_id' => 2,
            'name' => [
                'uz' => 'MDF',
                'ru' => 'МДФ'
            ]
        ]);

        Value::create([
            'attribute_id' => 2,
            'name' => [
                'uz' => 'LDSP',
                'ru' => 'ЛДСП'
            ]
        ]);
    }
}
