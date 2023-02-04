<html>
    <head>
        <link rel="icon" href="/Users/mhari/Downloads/57622405_1249266235240775_2931641992171487232_o.jpg">
        <title>
            HII
        </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<style>
			
			.col-sm-4:hover {
				height: 100%;
			}
			.form_bdr {
				border: none;
				border-bottom: 1px solid green;
			}
			.submit {
				border-radius: 35%;
				background-color: dimgray;
			}
			.submit:hover,
			.form_bdr:hover {
				background-color: darkgrey;
				border:1px double blue;
				color: aqua;
			}
			.submit:hover {
				font-size: 20px;
			}
			h3 {
				background-color: gray;
			}
			.icon-bar {
			  	position: fixed;
			  	top: 40%;
				z-index: 10;

			}

			.icon-bar a {
			  display: block;
			  text-align: center;
			  padding: 16px;
			  color: white;
			  font-size: 20px;

			}

			.icon-bar a:hover {
			  background-color: #000;
			}

			.facebook {
			  background: #3B5998;
			  color: white;
			}

			.twitter {
			  background: #55ACEE;
			  color: white;
			}

			.google {
			  background: #dd4b39;
			  color: white;
			}

			.linkedin {
			  background: #007bb5;
			  color: white;
			}

			.youtube {
			  background: #bb0000;
			  color: white;
			}


		</style>
    </head>
    <body>
        <div class="div1 container-fluid">
		<div class="icon-bar">
		  	<a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
		  	<a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
		  	<a href="#" class="google"><i class="fa fa-google"></i></a> 
		  	<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
		  	<a href="#" class="youtube"><i class="fa fa-youtube"></i></a> 
		</div>

			<div>
				<!-- Nav bar -->
				<nav class="navbar navbar-light bg-light">
				  <a class="navbar-brand" href="#">
						<img src="images/hi-logo.png" alt="HI logo" width="120px" height="auto">
				  </a>
					<ul class="nav justify-content-end">
					  <li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Who we Are</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#about">About Us</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#gallary">Gallary</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#history">History</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#contact">Contact Us</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="project_reg_form.php">Registration</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="project_login_form.php">Log_In <i class="fas fa-sign-in"></i></a>

					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#"><input type="text" name="search" placeholder="Type your search contant">&nbsp;<i class="fas fa-search"></i></a>
					  </li>	
					</ul>
				</nav>
			</div>
		
			<div class="bd-example">
			  <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
				  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="images/aircraft-carrier-slider-1600x790-144dpi.jpg" class="d-block w-100" alt="aircraft-carrier-slider-1600x790-144dpi">
					<div class="carousel-caption d-none d-md-block">
					  <h5>First slide label</h5>
					  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					</div>
				  </div>
				  <div class="carousel-item active">
					<img src="images/proteus_usv1600.jpg" class="d-block w-100" alt="proteus_usv1600">
					<div class="carousel-caption d-none d-md-block">
					  <h5>Second slide label</h5>
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				  </div>
				  <div class="carousel-item">
					<img src="images/lha-10-slider-1600x790-144dpi.jpg" class="d-block w-100" alt="lha-10-slider-1600x790-144dpi">
					<div class="carousel-caption d-none d-md-block">
					  <h5>Third slide label</h5>
					  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
					</div>
				  </div>
				</div>
				<a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
			  </div>
				<br>

			  	<div class="row text-center">
				  	<div class="col-sm-2 offset-xl-0"></div>
				 	<div class="col-sm-5">
						<h3 id="about">About Us</h3>
						<p>
							Huntington Ingalls Industries is America’s largest military shipbuilding company and a provider of professional services to partners in government and industry. For more than a century, HII’s Newport News and Ingalls shipbuilding divisions in Virginia and Mississippi have built more ships in more ship classes than any other U.S. naval shipbuilder. HII’s Technical Solutions division supports national security missions around the globe with unmanned systems, defense and federal solutions, and nuclear and environmental services. Headquartered in Newport News, Virginia, HII employs more than 41,000 people operating both domestically and internationally.
					 	</p>
				  	</div>
					<div class="col-sm-3">
						<img src="images/E75PrZLWQAkvHgT.jpg" alt="E75PrZLWQAkvHgT" class="img-responsive" height="300px" width="auto"/>
					</div>
					<div class="col-sm-2"></div>
				</div>
			<br>
				<div class="row text-center">
					<div class="col-sm-12"><h3 id="gallary">Gallary</h3></div>
					<div class="col-sm-4"><img src="images/nsc_11_startfab380.jpg" width="100%" height="80%"></div>
					<div class="col-sm-4"><img src="images/petters-q221-podcast650-1.jpg" width="100%" height="80%"></div>
					<div class="col-sm-4"><img src="images/proteus_usv1600.jpg" width="100%" height="80%"></div>
				</div><br>
				<div class="row text-center">
					<div class="col-sm-4"><img src="images/E79cyauXMAYxLhQ.jpg" width="100%" height="80%"></div>
					<div class="col-sm-4"><img src="images/E75VXE_XIAY8yJF.jpg" width="100%" height="80%"></div>
					<div class="col-sm-4"><img src="images/E75PrZLWQAkvHgT.jpg" width="100%" height="80%"></div>
				</div>
			<br>
		  		<div class="row text-center">
					<div class="col-sm-12"><h3 id="history">History</h3></div>
			  		<div class="col-sm-2"></div>
			 		<div class="col-sm-4">
						<p>
							Huntington Ingalls Industries is America’s largest military shipbuilding company and a provider of professional services to partners in government and industry. For more than a century, HII’s Newport News and Ingalls shipbuilding divisions in Virginia and Mississippi have built more ships in more ship classes than any other U.S. naval shipbuilder. HII’s Technical Solutions division supports national security missions around the globe with unmanned systems, defense and federal solutions, and nuclear and environmental services. Headquartered in Newport News, Virginia, HII employs more than 41,000 people operating both domestically and internationally.
				 		</p>
			  		</div>
					<div class="col-sm-4">
						<img src="images/lha-10-slider-1600x790-144dpi.jpg" alt="lha-10-slider-1600x790-144dpi" class="img-responsive" height="auto" width="100%"/>
					</div>
			  		<div class="col-sm-2"></div>
				</div>
			<br>
		  		<div class="row text-center">
					<div class="col-sm-12"><h3 id="contact">Contact Us</h3></div>
			 	 	<div class="col-sm-3"></div>
			 		<div class="col-sm-3">
						<i class="fab fa-facebook"></i>Facebook<br>
						<i class="fab fa-twitter-square"></i>Twitter<br>
			  		</div>
					<div class="col-sm-3">
						<form action="hii_comment_form.php" method="post" name="hii_comment_form">
							<input type="text" name="name" id="name" placeholder="Name" class="form_bdr">
							<input type="email" name="email" id="email" placeholder="Email ID" class="form_bdr"><br>
							<textarea rows="4" cols="50" name="comment" placeholder="Enter your comment here..." class="form_bdr" id="comment"></textarea><br>
							<input type="submit" name="submit" value="Submit" onClick="submit_comment()" class="submit">
						</form>
					</div>
			  		<script>
						function submit_comment() {
							var name= document.getElementById("name").value;
							var email = document.getElementById("email").value;
							var comment = document.getElementById("comment").value;
							alert("hiii "+name);
						}
					</script>
			  		<div class="col-sm-3"></div>
				</div>
			</div>
        </div>
    </body>
</html>