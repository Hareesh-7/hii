
<?php
	include("connection.php");
	if(isset($_POST['submit'])) {
		// $s_no = $_POST['s_no'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$comment = $_POST['comment'];

	}
	$sql="insert into comment_box (name,email,comment) values(?,?,?)";
	$stmt=$conn->prepare($sql);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$data=array($name,$email,$comment);
	var_dump($data);
	$stmt->execute($data);

	echo("comment submited");
?>

