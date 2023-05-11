<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/adaptation_case.bundle.css',
	'js' => 'dist/adaptation_case.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];