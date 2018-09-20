<?php

function getAsset($asset) {

  // Look for the manifest file.
  $manifest = (__DIR__ . '/dist/manifest.json');
  if (file_exists($manifest)){
    $manifest = file_get_contents($manifest);
    $json = json_decode($manifest, true);
    $file = $json[$asset];
    $file = '/dist/'.$file;
    return $file;
  }
}
function the_asset($asset){
  echo getAsset($asset);
}




?>
