<?php
function generation_short_key()
{
    $length = 6; // short_key length
    $randomBytes = openssl_random_pseudo_bytes($length);
    $characters = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
    $charactersLength = strlen($characters);
    $result = '';
    for ($i = 0; $i < $length; $i++)
        $result .= $characters[ord($randomBytes[$i]) % $charactersLength];

 return $result;
}