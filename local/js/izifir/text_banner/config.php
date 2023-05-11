<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/text_banner.bundle.css',
	'js' => 'dist/text_banner.bundle.js',
	'rel' => [
		'main.core',
	],
	'skip_core' => false,
];