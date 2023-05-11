<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/when_order.bundle.css',
	'js' => 'dist/when_order.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];