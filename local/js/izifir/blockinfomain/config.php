<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/blockinfomain.bundle.css',
	'js' => 'dist/blockinfomain.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];