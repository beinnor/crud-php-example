<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Crud Example in PHP</title>
</head>

<body>
  <?php require_once 'crud.php' ?>
  <div class="container">

    <h1 class="text-center">CRUD example in PHP</h1>

    <pre class="text-center"><code>
      db: crud_php
      tables: 
        users: id, username, age
    </code></pre>


    <div class="row justify-content-center">

      <div class="col-md border mx-1 p-2">
        <form action="crud.php" method="POST">
          <fieldset>
            <legend><b>C</b>reate new user</legend>
            <div class="form-group">
              <label for="id">Id</label>
              <input type="number" class="form-control" name="id" id="id" placeholder="id">
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="username">
            </div>
            <div class="form-group">
              <label for="age">Age</label>
              <input type="number" class="form-control" name="age" id="age" placeholder="age">
            </div>
            <div class="form-group">
              <button type="submit" name="create" class="btn btn-primary">Create</button>
            </div>
          </fieldset>
        </form>
      </div>

      <div class="col-md border mx-1 p-2">
        <form action="crud.php" method="post">
          <fieldset>
            <legend><b>U</b>pdate user</legend>
            <div class="form-group">
              <label for="id">Id</label>
              <input type="number" class="form-control" name="id" id="id" placeholder="id">
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="username">
            </div>
            <div class="form-group">
              <label for="age">Age</label>
              <input type="number" class="form-control" name="age" id="age" placeholder="age">
            </div>
            <div class="form-group">
              <button type="submit" name="update" class="btn btn-primary">Update</button>
            </div>
          </fieldset>
        </form>
      </div>

      <div class="col-md border mx-1 p-2">
        <form action="crud.php" method="post">
          <fieldset>
            <legend><b>D</b>elete user</legend>
            <div class="form-group">
              <label for="id">Id</label>
              <input type="number" class="form-control" name="id" id="id" placeholder="id">
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="username">
            </div>
            <div class="form-group">
              <label for="age">Age</label>
              <input type="number" class="form-control" name="age" id="age" placeholder="age">
            </div>
            <div class="form-group">
              <button type="submit" name="delete" class="btn btn-danger">Delete</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>

    <!-- TODO: Use jQuery/AJAX to pull this from client side and display -->
    <div class="row d-none">
      <div class="col-md border m-1 p-2">
        <form action="" method="post">
          <fieldset>
            <legend class="text-center"><b>R</b>ead all users</legend>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary" disabled>Read</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>

    <div class="row justify-content-center">
    <div class="col-md m-1 p-2">
    <h2 class="text-center"><b>R</b>ead users</h2>
      <table class="table table-hover">
        <thead class="thead-light">
        <tr>
        <th>id</th>
        <th>username</th>
        <th>age</th>
        </tr>
        </thead>
        <?php
        // TODO: Replace this with jQuery/AJAX later...
        $mysqli = new mysqli($host, $dbUsername, $dbPassword, $dbName) or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM $tableName");
        ?>
        <?php
          while($row = $result->fetch_assoc()) {
            ?>
            <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['age'] ?></td>
            </tr>
            <?php
          }
        ?>

      </table>
      </div>
    </div>


  </div>



  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>