<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/requisites.bundle.css',
	'js' => 'dist/requisites.bundle.js',
	'rel' => [
		'main.core',
	],
	'skip_core' => false,
];