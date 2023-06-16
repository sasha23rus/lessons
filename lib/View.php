<?php

namespace Lib;

use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\loader\FilesystemLoader;
use Twig\Environment;

class View
{
	private $twig;
	
	/**
	 * @throws SyntaxError
	 * @throws RuntimeError
	 * @throws LoaderError
	 */
	public function render($template, $data): string
	{
		if (!$this->twig) {
			$loader = new FilesystemLoader(VIEWS_DIR);
			$this->twig = new Environment($loader);
		}

		return $this->twig->render($template . 'twig', $data);
	}
}
