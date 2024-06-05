<?php

// ini set debug
ini_set('display_errors', 1);

// setup twig environment

use Twig\Environment;

require_once 'vendor/autoload.php';
require_once 'src/assets.php';

$environment_options = array(
    'debug' => true,
);

$basedir = realpath(__DIR__ . '/..');
$loader  = new \Twig\Loader\FilesystemLoader($basedir . '/resources/views');

$twig = new Environment($loader, $environment_options);

define('URL', 'http://baseplate-html.local');

// escape slashes
$escaped_url = str_replace('/', '\/', URL . '/dist/');

$context = [

    'assets' => [
        'dist' => $escaped_url,
        'styles' => get_asset('app.css'),
        'scripts' => get_asset('app.js'),
    ],
];
