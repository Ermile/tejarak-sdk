<?php
require '../tejarak.php';

$tejarak = new \tejarak('__API TOKEN__',1);

$respons = $tejarak->team('post',  ['name' => '_YOUR TEAM NAME__']);

$respons = $tejarak->team('patch', ['id' => '__YOUR TEAM ID__', 'name' => '_UPDATED NAME__']);

$respons = $tejarak->team('get',   ['id' => '__YOUR TEAM ID__']);

?>