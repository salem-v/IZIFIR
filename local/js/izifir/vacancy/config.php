<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/vacancy.bundle.css',
	'js' => 'dist/vacancy.bundle.js',
	'rel' => [
		'main.core',
	],
	'skip_core' => false,
];