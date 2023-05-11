<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/footer.bundle.css',
	'js' => 'dist/footer.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];