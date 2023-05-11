<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/programconditions.bundle.css',
	'js' => 'dist/programconditions.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];