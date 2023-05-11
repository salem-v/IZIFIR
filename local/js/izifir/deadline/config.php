<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/deadline.bundle.css',
	'js' => 'dist/deadline.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];