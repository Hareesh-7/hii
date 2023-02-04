<?php
    include('connection.php');
    if (isset($_POST['update'])){
        $name = $_POST['name'];
        $num = $_POST['number'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $language = $_POST['language'];
        $eme = $_POST['emergency'];
        $address = $_POST['address'];
        $user_type = $_POST['user_type'];
       $image = $_POST['image'];
     	$number= number_format($num);
		$emergency= number_format($eme);
	
		if (isset($_FILES['image'])){
		   $filename = $_FILES['image']['name'];
		   echo $filetmp = $_FILES['image']['tmp_name'];
		   $filepath = 'images/'.$filename;

		   move_uploaded_file($filetmp,$filepath);
		}

	
    }

   	echo $sql = "update registration set name='".$name."', number=".$num.", dob='".$dob."', address='".$address."',password= '".$password."',  gender='".$gender."',language='".$language."',emergency=".$eme.",user_type='".$user_type."',image='".$image."' where email='".$email."'";

  
   $result = $conn->query($sql);
      echo "User updated successfully";
   //code to isnert into db
?>


