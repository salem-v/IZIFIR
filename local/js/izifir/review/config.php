<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/review.bundle.css',
	'js' => 'dist/review.bundle.js',
	'rel' => [
		'main.polyfill.core',
		'izifir.swiper',
	],
	'skip_core' => true,
];