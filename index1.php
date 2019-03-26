<?php
    if(isset($_POST['submit']))
    {
        $con = mysqli_connect("localhost","root","password","pms");
       // mysqli_select_db($con, "pms");
       // echo("hi");
        $name = $_POST['name'];
        $email = $_POST['email'];   
        $pass = $_POST['pass'];
        $phone = $_POST['phone'];
        //echo ($name);
        //echo "<script>console.log('".$name."');</script>";
        if(!empty($_FILES['ufile']))
        {
           // echo "<script>console.log('uploads');</script>";
          $path = "uploads/";
          $path = $path . basename( $_FILES['ufile']['name']);
          if(move_uploaded_file($_FILES['ufile']['tmp_name'], $path)) {
            //echo "The file ".  basename( $_FILES['ufile']['name']). " has been uploaded";
          } else{
              //echo "There was an error uploading the file, please try again!";
          }
        }      
     $res = mysqli_query($con,"insert into Chemist values('$name','$email','$pass','$phone')");
     header('Location: index.php');   
    }
    
?>

<html>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registration Page</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <link href="./css/main.css" rel="stylesheet" media="all" type="text/css">
    <script type="text/javascript" src="validation.js"></script>
</head>

<body>
    <div class="image">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Apply for Registration</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="./index1.php" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="name">Chemist Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" name="email" placeholder="example@email.com" id="email" 
                                    pattern="/^[a-zA-Z0-9]+@[a-zA-Z]+.[a-zA-Z]{3}]$/" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="password" name="pass" placeholder="password" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Phone Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="phone" pattern="/^[6-9][0-9]+{9}$/" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload Certificate of Authorization</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="ufile" required>
                                    <!-- <label class="label--file" for="file">Choose file</label> -->
                                    <!-- <span class="input-file__info">No file chosen</span> -->
                                </div>
                                <div class="label--desc">Upload your Certificate. Max file size 10 MB</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <input class="btn btn--radius-2 btn--blue-2" type="submit" name="submit" value="Send Application">
                    </div>
                    </form>
            </div>
        </div>
    </div>

</body>

</html>



