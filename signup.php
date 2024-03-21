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
	<link rel="stylesheet" href="css/bootstrap.min.css">
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
		$username = mysqli_real_escape_string($con , $_POST['username']);
		$email = mysqli_real_escape_string($con , $_POST['email']);
		$password = mysqli_real_escape_string($con , $_POST['password']);
		$cpassword = mysqli_real_escape_string($con , $_POST['cpassword']);

		$pass = password_hash($password, PASSWORD_BCRYPT);
		$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

		$emailquery = "select * from user where email='$email' ";
		$query = mysqli_query($con ,$emailquery);

		$emailcount = mysqli_num_rows($query);

		if ($emailcount>0) {
			echo "email already exists";
		}else{
			if($password === $cpassword){
				$insertquery ="insert into user(username,email,password,cpassword) values('$username','$email','$pass','$cpass')";

				$iquery = mysqli_query($con, $insertquery);

				if($iquery){
					?>

					<script>
					alert("inset successful");
					</script>
					<?php
				}else{
					?>
						<script>
							alert("no inserted");
						</script>
						<?php
				}
			}else{
				?>
				 
				    <script>
							alert("password are not matching");
						</script>
						<?php
			}
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

					<!--	<li class="nav-item active li_active">
							<a href="index.php" class="nav-link link_a">Home</a>
						</li>-->
						<li class="nav-item active li_active">
							<a href="index.php" class="nav-link link_a">Home</a>
						</li>

						<li class="nav-item active li_active">
							<a href="blank.php" class="nav-link link_a">My Dashboard</a>
						</li>

					<!--	<li class="nav-item active li_active">
							<a href="" class="nav-link link_a">Status</a>
						</li>-->

						<li class="nav-item active li_active">
							<a href="" class="nav-link link_a">Help</a>
						</li>

						

						<li class="nav-item active li_active">
							<a href="" class="nav-link link_a">Contact Us</a>
						</li>

						<li class="nav-item active li_active">
							<a href="login.php" class="nav-link link_a">Login</a>
						</li>
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
			<div class="col-md-6 register">
				<h4>Register</h4>
				
				<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" class="form">
				<h4>About You</h4>
					<label>Username*</label><br>
					<input type="text" name="username" placeholder="Username" required style="width:90%;font-size:17px; padding-left:15px;"><br><br>
				<h4>Account Information</h4>	
					<label>Email *</label><br>
					<input type="text" name="email" placeholder="Enter email" style="width:90%;font-size:17px; padding-left:15px;"><br>
					<p style="font-size:13px;">A one-time email confirmation will be sent to this address. Your email address will serve as your login.</p><br>
				
					
				
					<label>Password*</label><br>
					<input type="password" name="password" placeholder="Choose a password" style="width:90%;font-size:17px; padding-left:15px;"><br>
					<p style="font-size:13px;">Passwords must be between 10 and 32 characters long and must meet two of the following requirements: an uppercase letter (A-Z), a lowercase letter (a-z), a number (0-9) or a special character (e.g., !?#).</p><br>
				
					<label>Conform Password*</label><br>
					<input type="password" name="cpassword" placeholder="Re-type your password" style="width:90%;font-size:17px; padding-left:15px;"><br><br>
			
					 
					Let's stay in touch:<br><br>
					<p style="font-size:15;"><input type="checkbox" name="vehicle1"style="font-size:17px; padding-left:15px;">
					Yes, please sign me up for the latest journal research news, event announcements, surveys and offers for my areas of interest. I agree to journal privacy policy here: https://www.journal publising.com/privacy
					<br><br>
					By clicking Register, you agree with the<a href=""><u> Terms of Service</u></a></p><hr>
					
					<input type="submit" name="submit" class="btn text-white" value="Create an acccount" style="margin-left:200px; background-color:#1B4F72  ;">
				</form>
			</div>
			
			<div class="col-md-5 ">
				<div class="resister1">
					<h4>Already registered with Journal publising system?
					<a href="login.php"><center><input type="submit" class="btn text-white" value="Login" style="background-color:#1B4F72; margin:20px ;"></center></a></h4>
				</div>
				<div class="resister2">
					<h5>Register with Journal Author Services:</h5>
					<p>1. Track your article to publication<br>
					   2. Sign license agreement online<br>
					   3. Order and pay for open access publications<br>
					   4. Invite colleagues to view your published article<br>
					   5. View citation metrics for your article</p>
				</div>
			
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