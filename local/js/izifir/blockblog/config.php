<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/blockblog.bundle.css',
	'js' => 'dist/blockblog.bundle.js',
	'rel' => [
		'main.polyfill.core',
		'local/js/izifir/card/src/style/style.scss',
		'izifir.swiper',
	],
	'skip_core' => true,
];