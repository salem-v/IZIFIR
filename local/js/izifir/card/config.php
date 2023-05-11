<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/card.bundle.css',
	'js' => 'dist/card.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];