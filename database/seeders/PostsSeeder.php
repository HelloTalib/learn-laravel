<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        for ($i = 1; $i < 20; $i++) {
            DB::table('posts')->insert([
                'title' => Str::random(10),
                'body' => Str::random(50),
            ]);
        }
    }
}
