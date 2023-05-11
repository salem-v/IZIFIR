<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/principles.bundle.css',
	'js' => 'dist/principles.bundle.js',
	'rel' => [
		'main.core',
		'izifir.swiper',
	],
	'skip_core' => false,
];