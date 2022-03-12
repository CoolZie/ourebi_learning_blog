<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class PageController extends Controller
{

    public function index()
    {
        $articles = Article::paginate(2);
        return view("layouts.child",compact('articles'));
    }
    public function addArticle()
    {
        return view("layouts.add-article");
    }
}
