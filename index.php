<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>UrbanFir</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body style="background-image:url('1.jpg');">
<div class="container">
  <h3 class="text-center" style="margin-top:20px;">Welcome To The UrbanFit</h3>
  <hr>
  <div style="float:right;">
    <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button>
  </div>

  <!-- Modal -->

  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Insert Your Data</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form method="post" action="login.php">

            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" placeholder="Enter Your Email" name="email" class="form-control" id="email" class="email">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" placeholder="Enter Your Password" name="password" class="form-control" id="pwd" class="pwd">
            </div>
            <div class="form-group">
              <input type="submit" value="submit" class="btn btn-success btn-block" name="submit" id="submit" class="submit">
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

      </div>

    </div>
  </div>
</div>

</body>
</html>
