<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/bannerprogram.bundle.css',
	'js' => 'dist/bannerprogram.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];