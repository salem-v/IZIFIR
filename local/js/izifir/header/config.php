<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/header.bundle.css',
	'js' => 'dist/header.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];