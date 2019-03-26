<?php
	//echo"hi";
	if(isset($_GET['submit'])){
		$con=mysqli_connect("localhost","root","password","pms");
		$name=$_GET['search'];
		$res=mysqli_query($con,"select * from medicine where Name='$name'");

		while($row=mysqli_fetch_array($res))
		{
			$temp1=$row['Name'];
			$temp=$row['Med_Id'];
			$temp2=$row['Price'];
			$temp3=$row['Quantity'];
			echo($temp);
			echo($temp1);
			echo(" "+$temp2);
			echo("  "+$temp3);
		}
	}

?>
<html>
<head>
	<title>Search</title>
	

</head>
<body>
	<form action="admin.php" method="GET">
	<input type="text" placeholder="search medicine" name="search" id="med_name">
	<button name="submit">Search</button>
</form>
</body>
</html>