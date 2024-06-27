
<html>
<head>


</head>

<body>
	<?php
	include("connection.php");
		if(isset($_POST['submit_form'])) {
			echo $name = $_POST['name']."<br>";	
			echo $last_name = $_POST['last_name']."<br>";
			echo $email = $_POST['email']."<br>";	
			echo $phone_number = $_POST['phone_number'];	

		}
		$sabita = "insert into form (name,last_name,email,phone_number) values(?,?,?,?)";
		$stat=$conn->prepare($sabita);
		$yerramsetti=array($name,$last_name,$email,$phone_number);
		$stat->execute($yerramsetti);
	
			echo "hii";



	
	?>
</body>
</html>
