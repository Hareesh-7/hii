<?php
	include('connection.php');
	$sql = "select * from registration";
	$result = $conn->query($sql);
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Registration Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<style>
		.reg {
			text-align: center;
		}
		
	</style>

</head>

<body>
	<div class="div1 container-fluid">
		<div>
			<!-- Nav bar -->
			<nav class="navbar navbar-light bg-light">
			  <a class="navbar-brand" href="#">
					<img src="images/hi-logo.png" alt="HI logo" width="120px" height="auto">
			  </a>
				<ul class="nav justify-content-end">
				  <li class="nav-item">
					<a class="nav-link active" aria-current="page" href="hii.php">Who we Are</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="hii.php">About Us</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="hii.php">Gallary</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="hii.php">History</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="hii.php">Contact Us</a>
				  </li>
				  <li class="nav-item">
					<!-- <a class="nav-link" href="hii.php">Registration</a> -->
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="project_login_form.php">Log_In &nbsp; <i class="fas fa-sign-in"></i></a>

				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#"><input type="text" name="search" placeholder="Type your search contant">&nbsp;<i class="fas fa-search"></i></a>
				  </li>	
				</ul>
			</nav>
		</div>
			<form method="post" enctype="multipart/form-data">
			<h1>table</h1>
				<table border="1">
					<tr style="text-align: center;">
						<td>Id</td>
						<td>Name</td>
						<td>Phone_Number</td>
						<td>Date of Birth</td>
						<td>Email ID</td>
						<td>Password</td>
						<td>Gender</td>
						<td>Language</td>
						<td>Address</td>
						<td style="color:red;" width="10%" height="10px">Photo</td>
						<td>Delete</td>
						<td>Update/Modify</td>
						<td>Upload</td>
					</tr>
					<?php
						$count=$result->rowCount();
					if ($count > 0) {
						while ($row=$result->fetch(PDO::FETCH_ASSOC)) {
							echo "<tr>
									<td>".$row['id']."</td>
									<td>".$row['name']."</td>
									<td>".$row['number']."</td>
									<td>".$row['dob']."</td>
									<td>".$row['email']."</td>
									<td>".$row['password']."</td>
									<td>".$row['gender']."</td>
									<td>".$row['language']."</td>
									<td>".$row['address']."</td>
									<td><img name=preview src=images/".$row['image']." style=width:9rem;height:7rem;></td>
									<td><a href=delete.php?email=".$row['email']." name=delete>delete</a></td>
									<td><a href=update_file.php?email=".$row['email']." name=update>Update</a></td>
									<td><a href=upload.php?email=".$row['email']." name=upload>upload</a></td>
								</tr>" ;
						}
					}
					else {
						echo "Details not found" ;
					}

					?>
				</table>
			</form>
</body>
</html>