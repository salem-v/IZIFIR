<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/maybe_interest.bundle.css',
	'js' => 'dist/maybe_interest.bundle.js',
	'rel' => [
		'main.polyfill.core',
		'izifir.swiper',
	],
	'skip_core' => true,
];