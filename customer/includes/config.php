<?php
require_once "Facebook/autoload.php";

$FB = new \Facebook\Facebook([
    
    'app_id' => '1764665356987410';
    'app_secret' => 'e3694698b9935cf42a48c754b9637f38';
    'default_graph_version' => 'v3.0';
    
]);

$helper = $FB->getRedirectLoginHelper();

?>
