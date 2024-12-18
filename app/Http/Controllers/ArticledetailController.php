<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticledetailController extends Controller
{
    public function index(string $id)
    {
        $article = Articles::where('id', $id)->first();
        return view('article_detail', compact('article'));
    }
}
