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
		form {
			padding: 0 0 0 40%;
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
					<a class="nav-link" href="hii.php">Gallery</a>
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
					<a class="nav-link" href="#"><input type="text" name="search" placeholder="Type your search content">&nbsp;<i class="fas fa-search"></i></a>
				  </li>	
				</ul>
			</nav>
		</div>
		<div class="reg">
			<h1>Registration Form</h1>
			<form action="submit_form.php" method="post" enctype="multipart/form-data">
				<table>
					<tr>
						<th>Name</th><th>:</th><td><input type="text" name="name" placeholder="Enter Your Name"></td>
					</tr>
					<tr>
						<th>Number</th><th>:</th><td><input type="number" name="number" placeholder="Enter Your Contact Number"></td>
					</tr>
					<tr>
						<th>Date of Birth</th><th>:</th><td><input type="date" name="dob" placeholder="Enter Your DOB"></td>
					</tr>
					<tr>
						<th>Email ID</th><th>:</th><td><input type="email" name="email" placeholder="Enter Your Valid Email ID"></td>
					</tr>
					<tr>
						<th>Password</th><th>:</th><td><input type="password" name="password" placeholder="Enter Your Password"></td>
					</tr>
					<tr>
						<th>Gender</th><th>:</th><td>
													<input type="radio" name="gender" value="Male">Male
													<input type="radio" name="gender" value="Female">Female
												</td>
					</tr>
					<tr>
						<th>Mother Tongue</th><th>:</th><td>
															<select name="language">
																<option>Telugu</option>
																<option>English</option>
																<option>Hindi</option>
																<option>Any Other</option>
															</select>
														</td>
					</tr>
					<tr>
						<th>Emergency Contact Number</th><th>:</th><td><input type="number" name="emergency" placeholder="Enter Your Guardian Number"></td>
					</tr>
					<tr>
						<th>Address</th><th>:</th><td><input type="text-area" name="address" placeholder="Enter Your address"></td>
					</tr>
					<tr>
						<th>Profile_Pic</th><th>:</th><td><input type="file" name="image" style="width: 150px; height: 100px;"></td>
					</tr>

					<tr>
						<td colspan="3" style="text-align: center">
							<input type="submit" value="SUBMIT" name="submit">
							<input type="reset" value="RESET" name="reset">
						</td>
					</tr>
					<tr>
						<td colspan="3" style="text-align: center" style="color: red">
							If already registered <a href="project_login_form.php">click here</a> to log_in.
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>