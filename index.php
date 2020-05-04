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
        <button type="button" class="mr-auto p-2 btn btn-success">Add Task</button>
      </div>      
      <div class="p-2">
        <button type="button" class="p-2 btn btn-default">Print</button>
      </div>
    </div>
      <br>  
      <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Task</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Larry</td>
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
    
