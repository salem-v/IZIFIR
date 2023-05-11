<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/case_all.bundle.css',
	'js' => 'dist/case_all.bundle.js',
	'rel' => [
		'main.core',
	],
	'skip_core' => false,
];