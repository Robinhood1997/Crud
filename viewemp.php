
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body style="background-color:grey;">

<div class="container" style="background-color:#efefef;">
     <div class="col-lg-12">
       <h3 class="text-center" style="margin-top:30px;">Employee Data</h3>
       <table class="table table-striped table-hover table-hover table-bordered">
        <tr>
         <th>fname</th>
         <th>lname</th>
         <th>image</th>
         <th>Delete</th>
         <th>Update</th>
       </tr>
<?php
        include("connection.php");
        $q="select id , image , fname , lname from user1";
        $query=mysqli_query($con,$q);
        while($res=mysqli_fetch_array($query))
        {
?>
       <tr>
        <td> <?php echo $res['fname']; ?> </td>
        <td> <?php echo $res['lname']; ?> </td>
        <td> <?php echo '<img src="images/'.$res['image'].'" width="70" height="70"/>';?> </td>

        <td> <button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id'];?>" class="text-white">Delete</a>
              </button>
         </td>

         <td> <button class="btn-primary btn"><a href="update.php?id=<?php echo $res['id'];?>" class="text-white">Update</a>
               </button>
          </td>
      </tr>
<?php
        }
?>       </table>
     </div>
     <a href="dashboard.php" class="btn btn-primary btn-sm float-right active" role="button" aria-pressed="true">Back</a>
</div>
</body>
</html>
