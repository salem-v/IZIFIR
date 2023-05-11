<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/concept.bundle.css',
	'js' => 'dist/concept.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];