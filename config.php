<?php

$server = $_SERVER['SERVER_NAME'];
$endereco = $_SERVER ['REQUEST_URI'];
$link =   "http://" . $server . $endereco;
$partes_link = explode('?',$link);


define('EMAIL','sistema4ong@gmail.com');
define('LINK', $partes_link[0]);







?>
