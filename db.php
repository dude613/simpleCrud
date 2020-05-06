<?php

$db = new Mysqli;

$db->connect('localhost','root','','simplecrud');

if($db){
    echo "DB Connection Successful";
}

?>