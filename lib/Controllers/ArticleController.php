<?php

namespace Lib\Controller;

use Lib\Model\Article,
	Lib\View;

class ArticleController
{
	public function index(): bool|string
	{
		$articles = Article::get();

		return View::render('Articles', ['articles' => $articles]);
	}

	public function detail($id): bool|string
	{
		$article = Article::where('id', $id)->firstOrFail();

		return View::render('Article', ['article' => $article]);
	}
}
