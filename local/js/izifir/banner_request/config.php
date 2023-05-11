<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/banner_request.bundle.css',
	'js' => 'dist/banner_request.bundle.js',
	'rel' => [
		'main.core',
	],
	'skip_core' => false,
];