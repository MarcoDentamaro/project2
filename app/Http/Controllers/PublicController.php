<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\PublicController;


class PublicController extends Controller
{
    public function welcome () {
        $articles = Article::all();
        return view('welcome', compact('articles'));
    }
}