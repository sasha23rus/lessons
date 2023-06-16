<?php

namespace Lib\Controller;

use Lib\Model\Article,
	Lib\View;

class ArticleController extends Router
{
	public function index(): bool|string
	{
		$articles = Article::get();

		return $this->render('Articles', ['articles' => $articles]);
	}

	public function detail($id): bool|string
	{
		$article = Article::where('id', $id)->firstOrFail();

		return $this->render('Article', ['article' => $article]);
	}
}
