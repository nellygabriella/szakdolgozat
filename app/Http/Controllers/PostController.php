<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class PostController extends Controller
{
    public function getSingle($slug){
        $news = News::where('slug','=',$slug)->first();

        return view('post.single')->withNews($news);
    }
}
