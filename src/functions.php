<?php

// ini set debug
ini_set('display_errors', 1);

// setup twig environment

use Twig\Environment;

require_once 'vendor/autoload.php'; 

$environment_options = array(
    'debug' => true,
);

$basedir = realpath(__DIR__ . '/..');
$loader = new \Twig\Loader\FilesystemLoader($basedir . '/resources/views');

$twig = new Environment($loader, $environment_options);
