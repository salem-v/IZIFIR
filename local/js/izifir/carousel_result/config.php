<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/carousel_result.bundle.css',
	'js' => 'dist/carousel_result.bundle.js',
	'rel' => [
		'main.core',
		'izifir.swiper',
	],
	'skip_core' => false,
];