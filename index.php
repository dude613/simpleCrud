<!doctype html>
<html lang="en">

<?php include 'db.php';

$page = (isset($_GET['page']) ? $_GET['page'] : 1);
$perPage = (isset($_GET['per-page']) && ($_GET['per-page']) <= 50 ? $_GET['per-page'] : 5);
$start = ($page > 1) ? ($page * $perPage) - $perPage :0 ;

$sql = "select * from tasks limit ".$start." , ".$perPage." ";
$total = $db->query("select * from tasks")->num_rows;
$pages = ceil($total / $perPage);

$rows = $db->query($sql);

?>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>simpleCrud</title>
  </head>
  <body>
  <div class="container">
        <h1 class="center space">To Do List</h1>
  </div>
  <div class="container" id="table">
    <div>
    <div class="d-flex p-1">
      <div class="mr-auto">
        <button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success">Add Task</button>
      </div>      
      <div class="ml-auto">
        <button type="button" class="btn btn-primary">Print</button>
        <br>
      </div>
    </div>

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <form method="post" action="add.php">
              <div class="modal-header">
              <h4 class="modal-title">Add Task</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label>Task Name</label>
                    <input type="text" required name="task" class="form-control">
                    </div>
                    <input type="submit" name="send" value="Add Task" class="btn btn-success">
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
      <table class="table">
      <thead>
            <tr>
            <th>#</th>
            <th>Task</th>
            </tr>
        </thead>
        <tbody>
            <tr>

              <?php while($row = $rows->fetch_assoc()): ?>        

            <th><?php echo $row['ID'] ?></th>
            <td class="col-md-10"><?php echo $row['Name'] ?></td>
            <td><a href="update.php?id=<?php echo $row['ID'];?>" class="btn btn-success">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $row['ID'];?>" class="btn btn-danger">Delete</a></td>
            </tr>
            
              <?php endwhile; ?>

        </tbody>
    </table>
    <div>
        <ul class="pagination justify-content-center">

        <?php for($i = 1 ; $i <= $pages; $i++): ?>
        <li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>&per-page<?php echo $perPage; ?>"><?php echo $i; ?></a></li>

        <?php endfor; ?>

        </ul>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>