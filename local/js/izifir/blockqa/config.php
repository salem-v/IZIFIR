<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/blockqa.bundle.css',
	'js' => 'dist/blockqa.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];