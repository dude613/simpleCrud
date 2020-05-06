<?php include 'db.php' ?>

<!doctype html>
<html lang="en">
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
    <table class="table">
    <div class="d-flex mb-3">
      <div class="mr-auto p-2">
        <button type="button" data-target="#myModal" data-toggle="modal" class="mr-auto p-2 btn btn-success">Add Task</button>
      </div>      
      <div class="p-2">
        <button type="button" class="p-2 btn btn-default">Print</button>
        <hr><br>
      </div>
    </div>

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title">Add Task</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label>Task Name</label>
                    <input type="text required name="task class="form-control">
                    </div>
                    <input type="submit" name="send" value="send" class="btn btn-success">
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        
      <thead>
            <tr>
            <th>#</th>
            <th>Task</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th>1</th>
            <td class="col-md-10">Eat</td>
            <td><a href=" " class="btn btn-success">Edit</a></td>
            <td><a href=" " class="btn btn-danger">Delete</a></td>
            </tr>
        </tbody>
    </table>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
    
