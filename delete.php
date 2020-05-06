<head>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<?php

require 'db.php';

$id = $_GET['id'];

$sql = "delete from tasks where ID = '$id'";

$val = $db->query($sql);

if ($val) {
    echo '<div> <br> </div>';

    echo 'deleted';

    echo '<div> <br> </div>';

    echo "<a href='index.php' class='btn btn-success'>Home</a>";

} else {
    echo '<div> <br> </div>';
    
        echo 'deletion failed'; 
    
        echo '<div> <br> </div>';
    
        echo "<a href='index.php' class='btn btn-success'>Home</a>";
};

?>