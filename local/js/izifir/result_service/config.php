<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/result_service.bundle.css',
	'js' => 'dist/result_service.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];