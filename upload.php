<?php
    if(isset($_POST['submit']))
    {
        $con = mysqli_connect("localhost","root","password","PMS");
        //mysqli_select_db($con, "PMS");
        echo("hi");
        $name = $_POST['name'];
        $email = $_POST['email'];   
        $pass = $_POST['pass'];
        $phone = $_POST['phone'];
        echo ($name);
        echo "<script>console.log('".$name."');</script>";
        if(!empty($_FILES['ufile']))
        {
            echo "<script>console.log('uploads');</script>";
          $path = "uploads/";
          $path = $path . basename( $_FILES['ufile']['name']);
          if(move_uploaded_file($_FILES['ufile']['tmp_name'], $path)) {
            echo "The file ".  basename( $_FILES['ufile']['name']). " has been uploaded";
          } else{
              echo "There was an error uploading the file, please try again!";
          }
        }      
        // $res = mysqli_query($con,"insert into Chemist values('$name','$email','$pass','$phone')");
    }   
?>