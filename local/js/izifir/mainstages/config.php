<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/MainStages.bundle.css',
	'js' => 'dist/MainStages.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];