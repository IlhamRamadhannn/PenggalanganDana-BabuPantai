<?php

namespace App\Http\Controllers;
use App\Models\Articles;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index(){
        $articles = Articles::paginate(10);

        // dd($articles);
        return view('articles',  compact('articles'));
    }
}
