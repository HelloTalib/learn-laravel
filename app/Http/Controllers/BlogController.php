<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller {
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) {


        // return  DB::table('blogs')->join('blogs_category', 'blogs.category_id', '=', 'blogs_category.id')
        //     ->select('blogs_category.*')
        //     ->get();
        $blog = DB::table('blogs')->get();

        return view('blog', compact('blog'));
    }
}
