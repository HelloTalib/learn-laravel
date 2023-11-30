<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller {
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) {

        $about = [
            'name' => 'Laravel 8',
            'version' => '8.0.0',
            'author' => 'Taylor Otwell',
            'website' => 'https://laravel.com',
        ];
        return view('about', compact('about'));
    }
}
