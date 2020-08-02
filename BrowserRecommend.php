<?php

$browser = get_browser(null, true);
$browser =strtolower($browser['browser']);

if ($browser!='chrome'){

  echo 'you are not using Google Chrome. Please do!';
}

?>