<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller {
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) {



        // $about = [
        //     [
        //         'name' => 'Laravel 8',
        //         'version' => '8.0.0',
        //         'author' => 'Taylor Otwell',
        //         'website' => 'https://laravel.com',
        //     ],
        //     [
        //         'name' => 'Bootstrap 5',
        //         'version' => '5.0.0-beta1',
        //         'author' => 'Bootstrap Team',
        //         'website' => 'https://getbootstrap.com',
        //     ],
        //     [
        //         'name' => 'Font Awesome 5',
        //         'version' => '5.15.1',
        //         'author' => 'Fonticons, Inc.',
        //         'website' => 'https://fontawesome.com',
        //     ],
        //     [
        //         'name' => 'jQuery 3',
        //         'version' => '3.5.1',
        //         'author' => 'JS Foundation',
        //         'website' => 'https://jquery.com',
        //     ],
        //     [
        //         'name' => 'Popper.js',
        //         'version' => '2.6.0',
        //         'author' => 'Federico Zivolo',
        //         'website' => 'https://popper.js.org',
        //     ]
        // ];
        // return DB::table('posts')->get();
        // return DB::table('posts')->find(5);
        // return DB::table('posts')->first();
        // return DB::table('posts')->where('id', '=', '10')->get();
        // return DB::table('posts')->pluck('body', 'title');

        return DB::table('posts')->where('id', '>', '10')->where('id', '<', '16')->get();

        return view('about', compact('about'));
    }
}
