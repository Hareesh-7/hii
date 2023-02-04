
<?php
    include('connection.php');
	if(isset($_POST['submit'])) {
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
	}

	if(isset($_FILES['file_name'])) {
		$fileName=$_FILES['file_name']['name'];
		$file_size =$_FILES['file_name']['size'];
		$file_temp = $_FILES['file_name']['tmp_name'];
		$file_type = $_FILES['file_name']['type'];
		$file_path = 'uploads/'.$fileName;
		move_uploaded_file($file_temp,$file_path);
	
	}
/*
		if ($file_size<= 1024 ) {
			echo "file_size < 1mb" ;
		}
		else {
			move_uploaded_file($file_temp,$file_path);
			echo "done" ;
		}

	}
	else {
		echo "bye";
	}
	
*/

?>

<?php
    include('connection.php');
    if (isset($_POST['p4'])){
         $name = $_POST['tname'];
         $phone = $_POST['phone'];
         $mail = $_POST['mail'];
         $address = $_POST['address'];       
         $password = $_POST['password'];

          
    }
    if (isset($_FILES['profile_pic'])){
       $filename = $_FILES['profile_pic']['name'];
       $filetmp = $_FILES['profile_pic']['tmp_name'];
       $filepath = 'profiles/'.$filename;

       move_uploaded_file($filetmp,$filepath);
  }
  $sql = "insert into users (name,address,email,phone,password,image)
  values(?,?,?,?,?,?)";
  $stmt =  $conn->prepare($sql);
      $data = array($name,$address,$mail,$phone,$password,$filename); 
      $stmt->execute($data);

    echo "Registration Successfull";
   //code to isnert into db
?>


