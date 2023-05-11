<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/blockformmain.bundle.css',
	'js' => 'dist/blockformmain.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];