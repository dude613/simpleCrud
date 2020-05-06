<?php

require 'db.php';

$id = $_GET['id'];

$sql = "delete from tasks where ID = '$id'";

$val = $db->query($sql);

if($val){

    echo '<div> <br> </div>';

echo 'deleted';

};

?>