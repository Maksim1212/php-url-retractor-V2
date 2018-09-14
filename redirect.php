<?php
/*------------ redirect.php -------------*/
// redirect to a finished link
require('config.php');


$key = htmlspecialchars($_GET['key']);

if(empty($_GET['key'])){}

else
{
    $select = $db->prepare("SELECT * FROM `short` WHERE `short_key` = '".$key."'");

    $select->execute(array($key));

    if($select)
    {

        $result = $select->fetch(PDO::FETCH_ASSOC);

        header('location: '.$result['url']);
    }
}
