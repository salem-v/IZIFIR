<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/BlogList.bundle.css',
	'js' => 'dist/BlogList.bundle.js',
	'rel' => [
		'main.polyfill.core',
		'izifir.blockblog',
		'izifir.case_all',
		'izifir.smartfilter',
	],
	'skip_core' => true,
];