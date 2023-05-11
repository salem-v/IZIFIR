<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/article.bundle.css',
	'js' => 'dist/article.bundle.js',
	'rel' => [
		'main.core',
	],
	'skip_core' => false,
];