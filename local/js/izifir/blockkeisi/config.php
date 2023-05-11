<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/blockkeisi.bundle.css',
	'js' => 'dist/blockkeisi.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];