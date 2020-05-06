<?php 

include 'db.php';

if(isset($_POST['send'])){

    $name = $_POST['task'];

    $sql = "Insert into tasks (Name) values ('$name')";

    $val = $db->query($sql);

    if($val){
        echo "<h1>Successful</h1>";
    }
    else {
        echo "<h1>Failed</h1>";
    }
}


?>