<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<style>
       .active {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #0A244C;
  height:50px;
}

.li_active {
  float: left;
}

 .link_a{
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

 .link_a:hover:not(.active) {
  background-color:#97BBDF  ;
}

.active {
  background-color:#0A244C;
}


    </style>
</head>
<body>

<?php
	include 'config.php';

	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		$email_search = "select * from user where email='$email' ";
		$query = mysqli_query($con, $email_search);

		$email_count = mysqli_num_rows($query);

		if($email_count){
			$email_pass = mysqli_fetch_assoc($query);

			$db_pass = $email_pass['password'];

			$_SESSION['username'] = $email_pass['usernae'];

			$pass_decode = password_verify($password, $db_pass);

			if($pass_decode){
				
				?>
				<script>
					location.replace("blank.php");
				</script>
				<?php 
			}else{
				
			}
		}else{
			
		}
	}
?>

	
	


	<!--navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark" id="ftco-navbar">
			<div class="container">
			<a class="navbar-brand" href="index.html"><img src="image/mznjd.jpg" style="width:150%; height:60px;"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-navbar" aria-controls="ftco-nav"aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-menu"></span>menu
				</button>
				
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto react ">

						<li class="nav-item active li_active">
							<a href="index.php" class="nav-link link_a">Home</a>
						</li>

						<li class="nav-item active li_active">
							<a href="blank.php" class="nav-link link_a">My Dashboard</a>
						</li>

					<!--	<li class="nav-item active li_active">
							<a href="" class="nav-link link_a"></a>
						</li>-->

					<li class="nav-item active li_active">
							<a href="" class="nav-link link_a">Help</a>
						</li>

						

						

						<li class="nav-item active li_active">
							<a href="" class="nav-link link_a">Contact Us</a>
						</li>

					<!--	<li class="nav-item active li_active">
							<a href="" class="nav-link link_a">Login</a>
						</li>-->
					</ul>
				</div>
			</div>
		</nav>
	<!--end navigation-->

	<!--search	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
			</div>
		</div>
	</div>
	<!--end search-->

	<!--section-->
	<div class="container-fluid back">
		<div class="row">
			<div class="col-md-5 login">
				<h4>Login</h4>
				
				<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" class="form">
					<label><b>Email*</b></label><br>
					<input type="text" name="email" placeholder="Enter Email" style="width:90%;font-size:17px; padding-left:15px;"><br><br>


					<label><b>Password*</b></label><br>
					<input type="password" name="password" placeholder="Enter Password" style="width:90%;font-size:17px; padding-left:15px;"><br><br>
					<a href="" style=" font-size:15px;"><u>Forgotten password?</u></a><br><br>
					


					<input type="submit" name="submit" class="btn text-white" value="Login" style="margin-left:250px; background-color:#1B4F72  ;">
				</form>
				
			</div>
			
			<div class="col-md-6 new">
				<h4>New to Journal Publising?</h4>
				<p class="journal">With your Journal ID, you can access and manage your account on:<br><br>
					1. Journal Online Library<br><br>
					2. Journal Authors<br>
					
				<a href="signup.php"><input type="submit" class="btn text-white" value="SignUp" style="margin-left:300px; background-color:#1B4F72  ;"></a>
				</p>
			</div>
		</div>
	</div>
<!--end section-->

<!--FOOTER
	
		
		<footer class="footer_area">
			
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 footer_about">
						<h3></i>IIS<br><small>(deemed to be University)</small></h3>
						<p style="padding:20px;">Receive updates and latest news direct from Simply enter.</p><hr style="border-top: 2px solid #85C1E9 ;">
							
					</div>
					
					
					<div class="col-md-3 footer_service">
					
					<h4>ADDRESS</h4><hr style="border-top: 2px solid #85C1E9 ;">
						 <ul>
							<i class="fa fa-phone"></i> <a href="callto:+1 800 000 111" class="text-white">0141-2400160</a><br>
							<i class="fa fa-map-marker"></i> <a href="callto:+1-2534-4456-3451" class="text-white"> iisuniversity@iisuniv.ac.in</a><br>
							<i class="fa fa-university" aria-hidden="true"></i>SFS , Gurukul Marg<br>Mansarovar, Jaipur 302020 INDIA</p>
						</ul>
					</div>
					
					<div class="col-md-3 footerc">
					<h4>MORE INFO</h4><hr style="border-top: 2px solid #85C1E9 ;">	
					<a href="" class="text-white">About journal</a><br>
					<a href="" class="text-white">Contact us</a><br>
					<a href="" class="text-white">Our leadership team</a><br>
					<a href="" class="text-white">Careers</a><br>
					<a href="" class="text-white">Sitemap</a>
					</div>
					
					<div class="col-md-3 footerc">
						
					<a href="" class="text-white">Resources</a><br>
					<a href="" class="text-white">Authors</a><br>
					<a href="" class="text-white">Editors</a><br>
					<a href="" class="text-white">Librarians</a><br>
					<a href="" class="text-white">Researchers</a><br>
					<a href="" class="text-white">Reviewers</a><br>
					<a href="" class="text-white">Policies & information</a><br>
					<a href="" class="text-white">Privacy</a>
					</div>
					
					
					
					
				</div><hr class="hr_footer" style="border: 1px solid #ddd;">
				
				<div class="row">
					<div class="col-md-10">
					<p class="text-white">
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://transpotation.com" target="_blank">Priyanka Dagar</a></p>
					</div>
					<div class="col-md-2 footer_link">
						<a href="#" class="text-white"><i class="fa fa-facebook"></i></a>
						<a href="#" class="text-white"><i class="fa fa-vimeo"></i></a>
						<a href="#" class="text-white"><i class="fa fa-twitter"></i></a>
						<a href="#" class="text-white"><i class="fa fa-behance"></i></a>
						<a href="#" class="text-white"><i class="fa fa-dribbble"></i></a>
								  
					</div>
				</div>
			</div>
		</footer>
		
		
		
<!--END FOOTER-->
</body>

</html>