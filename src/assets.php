<?php

function get_asset($asset) {

  $basedir = realpath(__DIR__ . '/..');
  $manifest = ($basedir . '/dist/manifest.json');
  if (file_exists($manifest)){
    $manifest = file_get_contents($manifest);
    $json = json_decode($manifest, true);
    $file = $json[$asset];
    $file = '/dist/'.$file;
    return $file;
  }
}

function the_asset($asset){
  echo get_asset($asset);
}

