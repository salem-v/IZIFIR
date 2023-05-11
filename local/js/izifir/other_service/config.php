<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/other_service.bundle.css',
	'js' => 'dist/other_service.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];