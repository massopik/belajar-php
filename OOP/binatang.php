<?php

require_once 'animal.php';
require_once 'frog.php';
require_once 'ape.php';

$sheep = new animal('shaun');
echo 'Nama ' . $sheep->name . '<br>';
echo 'kakinya ada : ' . $sheep->legs . '<br>';
echo 'berdarah dingin ? ' . $sheep->cold_blooded . '<br><br>';

$kodok = new frog('buduk');
echo 'Nama ' . $kodok->name . '<br>';
echo 'kakinya ada : ' . $kodok->legs . '<br>';
echo $kodok->jump() . '<br><br>';

$kera = new ape('sungokong');
echo 'Nama ' . $kera->name . '<br>';
echo 'kakinya ada : ' . $kera->legs . '<br>';
echo 'berdarah dingin ? ' . $kera->cold_blooded . '<br>';
$kera->yell();

?>