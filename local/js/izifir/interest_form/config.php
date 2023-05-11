<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/interest_form.bundle.css',
	'js' => 'dist/interest_form.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];