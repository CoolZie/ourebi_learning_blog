<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function store(ArticleRequest $request)
    {
        /*  $request->validate([
            'title' => 'required',
        ],[
            'title.required'=>"Le titre est obligatoire"
        ]); */
        /* $article = new Article;
        $article->title = $request->title;
        $article->auteur = $request->auteur;
        $article->contenu = $request->contenu;
        $article->save(); */
        $data = $request->all();
        unset($data['_token']);
        DB::table('articles')->insert($data);
        return redirect('/');
    }
}
