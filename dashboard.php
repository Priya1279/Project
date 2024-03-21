
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

.dashboard{
	 border: 2px solid #EDF3F9 ;
	  background-color:#EDF3F9 ;
	   margin:30px; 
	   text-align:center;
	    height:100px;
	     padding:25px;
}

    </style>
</head>
<body>
	


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
							<a href="submission.php" class="nav-link link_a">For Author</a>
						</li>

					<!--	<li class="nav-item active li_active">
							<a href="" class="nav-link link_a">My Submission</a>
						</li>-->

					<!--	<li class="nav-item active li_active">
							<a href="" class="nav-link link_a">Status</a>
						</li>-->

						<li class="nav-item active li_active">
							<a href="" class="nav-link link_a">News</a>
						</li>

						

						<li class="nav-item active li_active">
							<a href="contact.php" class="nav-link link_a">Contact Us</a>
						</li>

						<li class="nav-item active li_active">
							<a href="login.php" class="nav-link link_a">Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	<!--end navigation-->

	<!--Dashboard-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3 dashboard" >
					<a href="submission.php" class=text-dark><h1>Author</h1></a>
				</div>

				

				<div class="col-md-3 dashboard" >
					<a href="reviwer.php" class=text-dark><h1>Reviewer</h1></a>
				</div>
			</div>
		</div>
	<!--end dashboard-->

	<!--FOOTER-->
	
		
	<footer class="footer_area">
			
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 footer_about">
						<h3></i>Uttaranchal University<br><small>NAAC A+</small></h3>
						<p style="padding:20px;">Receive updates and latest news direct from Simply enter.</p><hr style="border-top: 2px solid #85C1E9 ;">
							
					</div>
					
					
					<div class="col-md-3 footer_service">
					
					<h4>ADDRESS</h4><hr style="border-top: 2px solid #85C1E9 ;">
						 <ul>
							<i class="fa fa-phone"></i> <a href="callto:+1 800 000 111" class="text-white">18002700288</a><br>
							<i class="fa fa-map-marker"></i> <a href="callto:+1-2534-4456-3451" class="text-white"> </a><br>
							<i class="fa fa-university" aria-hidden="true"></i> Dehradun, Uttarakhand<br> INDIA</p>
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
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://transpotation.com" target="_blank">Priyanka </a></p>
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