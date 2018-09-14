<?php
/*------------ index.php -------------*/
include 'form.html';  // use html form

require('config.php'); // use file coonnection with db

$href = htmlspecialchars($_POST['link']);  // Converts special characters to HTML entities

if(empty($_POST['submit'])) {}

if(empty($_POST['link']))   {}

else {

    require_once('key_generator.php'); // use function generation short url

    $result = generation_short_key();

    /*-------------- Save Info -------------*/

    $insert = $db->query("INSERT INTO `short` (`id`, `url`, `short_key`) VALUES (NULL, '" . $href . "', '" . $result . "') ");

    $select = $db->query("SELECT * FROM `short` WHERE `url` = '" . $href . "'");

    $result = $select->fetch(PDO::FETCH_ASSOC);

    $link = 'http://' . $_SERVER['HTTP_HOST'] . '/-';
}

include 'result.html'; // this file show results

?>