<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/blockklientmain.bundle.css',
	'js' => 'dist/blockklientmain.bundle.js',
	'rel' => [
		'main.polyfill.core',
		'izifir.swiper',
	],
	'skip_core' => true,
];