<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogCategorySeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        for ($i = 1; $i < 10; $i++) {
            DB::table('blogs_category')->insert([
                'category_name' => Str::random(10),
            ]);
        }
    }
}
