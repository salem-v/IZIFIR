<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/programinfo.bundle.css',
	'js' => 'dist/programinfo.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];