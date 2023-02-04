<?php
	$userName = $_POST['email'];
	$password = $_POST['password'];
	if($userName==$_POST['email'] && $password==$_POST['password']) {
		echo($userName)."<br>";
	}
	else {
		echo($password);
	}
	$userPhone = "123456789";
	//here we login using phone number or userName
	if(($userName=="abc" | $userPhone=="123456789") and $password=="abc@123") {
		echo "Or Logical Operator: User Successfully loged in!"."<br>";
	}
	// not equal to abc (userName)
	if($userName!="abcd")
	{
	echo "Not Operator User Name is not : abc"."<br>";
	}
?>