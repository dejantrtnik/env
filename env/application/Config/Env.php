<?php
// sample Directory
if (!defined('env')) {
  die('403');
}
class Env
{
  function __construct($dotEnv){
    $this->dotEnv = $dotEnv;
  }
  function dotEnv($dotEnv){
    if (file_exists('.env')) {
      $fileDotEnv = explode("\n", file_get_contents('.env', true));
      foreach ($fileDotEnv as $envData) {
        if(preg_match('/^' . $dotEnv . ' = /',$envData)){
          $data = preg_replace('/^' . $dotEnv . ' = /', '' , $envData);
          return $data;
        }
      }
    }
  }
}


?>
