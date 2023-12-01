<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogsSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {

        DB::table('blogs')->insert([
            [

                'title' => 'How to use Laravel 8 Seeder',
                'category_id' => 1,
                'description' => 'today we will learn how to use laravel 8 seeder. laravel 8 seeder is a very important part of laravel 8. we will learn how to use laravel 8 seeder with example.',
            ],
            [
                'title' => 'How to use React js with Laravel 8',
                'category_id' => 2,
                'description' => 'react js is a very popular frontend library. today we will learn how to use react js with laravel 8. we will learn how to use react js with laravel 8 with example.',
            ],
            [
                'title' => 'How to use Vue js with Laravel 8',
                'category_id' => 3,
                'description' => 'vue js is a very popular frontend library. today we will learn how to use vue js with laravel 8. we will learn how to use vue js with laravel 8 with example.',
            ],
            [
                'title' => 'How to use Angular js with Laravel 8',
                'category_id' => 4,
                'description' => 'angular js is a very popular frontend library. today we will learn how to use angular js with laravel 8. we will learn how to use angular js with laravel 8 with example.',
            ],
            [
                'title' => 'How to use Node js with Laravel 8',
                'category_id' => 5,
                'description' => 'node js is a very popular frontend library. today we will learn how to use node js with laravel 8. we will learn how to use node js with laravel 8 with example.',
            ]
        ]);
    }
}
