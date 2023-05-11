<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/smartfilter.bundle.css',
	'js' => 'dist/smartfilter.bundle.js',
	'rel' => [
		'main.core',
	],
	'skip_core' => false,
];