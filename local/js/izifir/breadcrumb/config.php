<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/breadcrumb.bundle.css',
	'js' => 'dist/breadcrumb.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];