<head>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<?php 

include 'db.php';

if(isset($_POST['send'])){

    $name = htmlspecialchars($_POST['task']);

    $sql = "Insert into tasks (Name) values ('$name')";

    $val = $db->query($sql);

    if($val){
        header('location: index.php');
    }
    else {
        echo "<h1>Failed</h1>";

        echo "<a href='index.php' class='btn btn-success'>Home</a>";
    }
}


?>