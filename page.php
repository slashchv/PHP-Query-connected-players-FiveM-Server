<?php
 include_once 'FivemQueryPlayers.php';

$ip = '127.0.0.1'; // IP Server
$port = '30120'; // TCP Port Server

$CountPlayers = FivemQueryPlayers($ip, $port);
 if ($CountPlayers) {
     echo 'Server ONLINE - '.$CountPlayers.' Players connected';

 } else {
     echo 'Server OFFLINE';
 }
?>
