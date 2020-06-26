<?php
include("connection.php");
 $id=$_GET['id'];
if(isset($_POST['register']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $dob = $_POST['date'];
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

   @move_uploaded_file($image_tmp,"images/$image");

  $q="UPDATE user1 SET fname='$fname', lname='$lname' , email='$email' , phone='$phone',
      image='$image' , descrip='$desc' , dob='$dob' ,id='$id'  WHERE id='$id' ";



   if($query=mysqli_query($con,$q))
   {
     echo "Record was updated successfully.";
     header("Location:viewemp.php");
   }
  else
  {
    echo "ERROR: Could not able to execute $q. ". mysqli_error($con);
  }
}
?>


<html lang="en">
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>
<body style="background-color:grey;">
<div class="container" style="margin-top:30px;background-color:#efefef">

<h1 class="text-center">Update Record</h1>
        <form method="post" enctype="multipart/form-data">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fname">FirstName</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="fname">
                </div>
                <div class="form-group col-md-6">

                        <label for="lname">LastName</label>
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="lname">
                </div>
              </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="email">
                    </div>
                <div class="form-group col-md-6">
                    <label for="phone">Phone No.</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="phone">
                </div>
            </div>

            <div class="form-row">
                   <div class="form-group col-md-6">
                          <lable align="right">Image:</lable> <br>
                              <img src="" id="profile-img-tag" width="100px" />
                              <br>
                              <input type="file" name="image" id="profile-img" required/><br>
                                      <script type="text/javascript">
                                        function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();
                                                    reader.onload = function (e) {
                                                    $('#profile-img-tag').attr('src',e.target.result);
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                        $("#profile-img").change(function(){
                                            readURL(this);
                                        });
                                    </script>
                      </div>



                      <div class="form-group col-md-6">
                          <label for="d.o.b">D.O.B</label>
                          <input type="date" class="form-control" id="date" name="date" placeholder="d.o.b">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6 text-center">
                              <label for="desc">Description</label>
                                  <textarea class="form-control rounded-0" name="desc" id="desc" rows="2"></textarea>
                      </div>
                    </div>

                    <div class="text-center">
                        <input class="btn btn-primary " type="submit" name="register" value="submit" />
                        <a href="dashboard.php" class="btn btn-primary btn-md  active" role="button" aria-pressed="true">Back</a>
                    </div>

        </form>
        </div>
</body>
</html>
