<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/optimization_case.bundle.css',
	'js' => 'dist/optimization_case.bundle.js',
	'rel' => [
		'main.core',
		'izifir.swiper',
	],
	'skip_core' => false,
];