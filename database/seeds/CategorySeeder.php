<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run()
    {
        Category::create([
            'name' => [
                'uz' => 'Stol',
                'ru' => 'Стол'
            ]
        ]);

        Category::create([
            'name' => [
                'uz' => 'Divan',
                'ru' => 'Диван'
            ]
        ]);

        Category::create([
            'name' => [
                'uz' => 'Kreslo',
                'ru' => 'Кресло'
            ]
        ]);

        Category::create([
            'name' => [
                'uz' => 'Yotoq',
                'ru' => 'Кровать'
            ]
        ]);

        Category::create([
            'name' => [
                'uz' => 'Stul',
                'ru' => 'Стул'
            ]
        ]);
    }
}
