<?php
// $flag=0; 
if (isset($_POST['submit'])){
	$con = mysqli_connect("localhost","root","password","pms");
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$user = $_POST['sel'];	
	if($user=="admin"){
		if($email=="admin" && $pass=="admin")
			header('Location: admin.php');
	}
	else{
		$result=mysqli_query($con,"select * from chemist where email = '$email'");
		if($result){
			while($row=mysqli_fetch_array($result)){
			$pass1 = $row['password'];
			echo($pass1);
			if($pass==$pass1){
				header('Location: chemist.php');
			}
			else{
				echo("ad");
			}

		}
	}
	}
}
	 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="link.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- <script type="text/javascript">
		function validate() {
			var email = document.login.email.value;	
			var  pass = document.login.pass.value; 
			var user  = document.getElementById("sel").value;
			alert(user);
			if(user=="admin")
			{
				if(email=="admin" && pass=="admin" ){
					document.location.href='admin.php',true;
				}
			}
			else
			{
				<?php $flag; ?>
			}
		}
	</script> -->
	<h2><b>Pharmacy Management System</b></h2>
	
</head>
<body>
	
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
			
			</div>
			<div class="card-body">
				<form name="login" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="email" id="email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="pass" id="pass">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<select name="sel" id="sel">
							<option>Select Option</option>
							<option value="admin" id="1">Admin</option>
							<option value="chemist" id="2">Chemist</option>
						</select>
					</div>
					<div class="form-group">
						<button class="btn float-right login_btn" name="submit">Login</button>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="index1.php">Sign Up</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>