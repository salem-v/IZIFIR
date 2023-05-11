<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/programcontact.bundle.css',
	'js' => 'dist/programcontact.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];