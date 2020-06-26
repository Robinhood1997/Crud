<?php
include("connection.php");
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

       @ move_uploaded_file($image_tmp,"images/$image");

       $query = "insert into user1 (fname,lname,email,phone,image,descrip,dob) values

            ('$fname','$lname','$email','$phone','$image','$desc','$dob')";

        $result = mysqli_query($con, $query);

        if($result==1)
        {

        echo "Inserted successfully";

        header('Location:dashboard.php');


        }
        else {

        echo "Insertion Failed";

             }
    }
?>
