<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/blockcomand.bundle.css',
	'js' => 'dist/blockcomand.bundle.js',
	'rel' => [
		'main.core',
		'izifir.swiper',
	],
	'skip_core' => false,
];