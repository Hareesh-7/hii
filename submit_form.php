
<?php
	include("connection.php");
	if(isset($_POST['submit'])) {
//		$id = $_POST['id'];
		$name = $_POST['name'];
		$number = $_POST['number'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];
		$language = $_POST['language'];
		$emergency = $_POST['emergency'];
		$dob = $_POST['dob'];
		$user_type = "1";

		if (isset($_FILES['image'])){
		   $filename = $_FILES['image']['name'];
		   echo $filetmp = $_FILES['image']['tmp_name'];
		   $filepath = 'images/'.$filename;

		   move_uploaded_file($filetmp,$filepath);
		}

	}
		echo($filepath);
	echo $sql="insert into registration (name,number,dob,email,password,gender,language,emergency,address,user_type,image) values(?,?,?,?,?,?,?,?,?,?,?)";
	$stmt=$conn->prepare($sql);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$data=array($name,$number,$dob,$email,$password,$gender,$language,$emergency,$address,$user_type,$filename);
	var_dump($data);
	$stmt->execute($data);

	echo("form submited");
?>

