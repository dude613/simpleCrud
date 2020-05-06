<!doctype html>
<html lang="en">

<?php 

include 'db.php';

$id = $_GET['id'];

$sql = "select * from tasks where ID = '$id'";

$rows = $db->query($sql);

$row = $rows->fetch_assoc();

if(isset($_POST['send'])){

    $task = $_POST['task'];

    $sql2 = "update tasks set Name = '$task' where id = '$id'";

    $db->query($sql2);

    header('location: index.php');

};
?>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>simpleCrud - Update</title>
  </head>
  <body>
  <div class="container">
        <h1 class="center space">Update - <?php echo $row['Name'] ?></h1>
  </div>
  <div class="container" id="table">
    <table class="table">
    <div class="d-flex mb-3">      
        <br>
    </div>  
            <form method="post">
                <div class="form-group">
                <label>Task Name</label>
                <input type="text" required name="task" value="<?php echo $row['Name']?>" class="form-control">
                </div>
                <input type="submit" name="send" value="Update Task" class="btn btn-success">
            </form>
        </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
    
