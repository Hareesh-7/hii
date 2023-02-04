<?php
    include('connection.php');
    if (isset($_POST['submit'])){
         $email = $_POST['email'];
         $password = $_POST['password'];
        

          
    }
    $query = "select * from registration where email = '".$email."' and password='".$password."'";

  $result = $conn->query($query);

  if ($result->rowCount() > 0)
  {
      session_start();
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $_SESSION['registration'] = $row['email'];

        if ($row['user_type'] == 0) {
            header('location:hii.php');
        }
        else{
            header('location:project_reg_form.php');
        }

	  // echo("okk");
  }  
  else{
	  echo("no");
    // header('location:login.php');
  }
?>
