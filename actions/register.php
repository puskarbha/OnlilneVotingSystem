<?php
include('connect.php');
    $username=$_POST['username'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $image=$_FILES['photo']['name'];
    $tmp_name=$_FILES['photo']['tmp_name'];
    $std=$_POST['std'];
   
    if($password!=$cpassword){
        echo' <script> 
        alert("passwords doesnot match");
        window.location="../partials/registration.php";
        </script>';
    }
    else{
        move_uploaded_file($tmp_name,"..uploads/$image");
        $sql="insert into `userdata`(username,mobile,password,photo,standard,status,votes) values('$username','$mobile','$password','$image','$std',0,0)";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo' <script> 
            alert("Registration succussful");
            window.location="../";
            </script>';
        }
        else{
            echo"Registration unsuccessful.";
            die("Connection failed: " . mysqli_connect_error());
        }
    }
?>