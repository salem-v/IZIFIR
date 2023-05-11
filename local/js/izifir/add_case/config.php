<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/add_case.bundle.css',
	'js' => 'dist/add_case.bundle.js',
	'rel' => [
		'main.core',
		'izifir.swiper',
	],
	'skip_core' => false,
];