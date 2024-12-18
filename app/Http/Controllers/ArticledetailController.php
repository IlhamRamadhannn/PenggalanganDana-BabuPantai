<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticledetailController extends Controller
{
    public function index()
    {
      
        return view('article_detail');
    }
}
