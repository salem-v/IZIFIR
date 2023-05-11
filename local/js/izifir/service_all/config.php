<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/service_all.bundle.css',
	'js' => 'dist/service_all.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];