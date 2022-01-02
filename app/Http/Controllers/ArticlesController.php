<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Repositories\ArticlesRepository;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    private $repository;

    public function __construct(ArticlesRepository $repository)
    {
        $this->repository = $repository;
    }
    public function index()
    {
        return 1;
        $articles = Article::all();
        return view('welcome', compact('articles'));
    }

    public function search(Request $request)
    {
        $articles = $this->repository->search($request->q);
        return view('welcome', compact('articles'));
    }
}
