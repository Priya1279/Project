
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
</head>
<body>
	<!--header
		<div class="container-fluid header">
			<div class="row">
				<div class="col-md-12">
					<b><img src="image/unnamed.jpg" style="width:100px; height:100px;"></b>
				</div>
			</div>
		</div>
	end header-->


	<!--navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark" id="ftco-navbar">
			<div class="container">
			<a class="navbar-brand" href="index.html"><img src="image/mznjd.jpg" style="width:150%; height:60px;"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-navbar" aria-controls="ftco-nav"aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-menu"></span>menu
				</button>
				
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a href="index.php" class="nav-link">Home</a>
						</li>

						<li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">About Journal</a>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="indexing.php" id="drop_items1">Journal Indexing</a>
                                            
                                <a class="dropdown-item" href="why.php" id="drop_items1">Why Choose IIS Journal</a>
                                            
                                <a class="dropdown-item" href="paper.php" id="drop_items1">Call for Paper </a>
                                            
                                <a class="dropdown-item" href="pree_review.php" id="drop_items1">Review Process</a>
                                            
                                <a class="dropdown-item" href="#" id="drop_items1">Open Access Model</a>
                                            
                                </div>
                        </li>

                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">For Author </a>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="online_submit.php" id="drop_items1">How to Submit Your Paper</a>
                                            
                                <a class="dropdown-item" href="pay_publication.php" id="drop_items1">How to pay publication fees</a>
                                            
                                <a class="dropdown-item" href="manuscript.php" id="drop_items1">Manuscript Preprartion Guidelines</a>
                                            
                                <a class="dropdown-item" href="#" id="drop_items1">Copyright Form</a>
                                            
                                <a class="dropdown-item" href="#" id="drop_items1">FAQ</a>
                                            
                                </div>
                        </li>

                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Quality Report</a>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="static.php" id="drop_items1">Statics</a>
                                            
                                <a class="dropdown-item" href="citation.php" id="drop_items1">Citation Report</a>
                                            
                                <a class="dropdown-item" href="#" id="drop_items1">Copyright Policy</a>
                                            
                                <a class="dropdown-item" href="#" id="drop_items1">Ethics</a>
                                            
                                <a class="dropdown-item" href="#" id="drop_items1">Publication Standard</a>
                                            
                                </div>
                        </li>


						<!--<li class="nav-item active">
							<a href="contact.php" class="nav-link">Contact Us</a>
						</li>-->

						<li class="nav-item active">
							<a href="login.php" class="nav-link">Login</a>
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


	 <!--slider-->
	 <div class="carousel slide carousel-fade" id="mycarousel" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
			
		</ul>
		
		<div class="carousel-inner">
			<div class="carousel-item active" alt="Nature" data-interval="1000">
				<div class="cont">
					<img src="image/Introduction ro peer review and the scholarly publishing process.jpeg" class="img-fluid" style="width: 100%; height: 500px;">
						<div class="text-block">
							<h1>We are a global publisher</h1>
							<p>Passionate about real impact, and proud winner of the IPG's Publisher of the year 2020</p>
							
							<input type="button" class="btn btn-info btn-lg nature" name="submit" value="Full Guideline">
						</div>
					
				</div>
			</div>
			
			<!--<div class="carousel-item" alt="Nature" data-interval="1000">
			  <img src="image/blog-img-3.jpg" class="img-fluid" style="width:100%;height: 500px;">
              <div class="text-block">
							<h1>We are a global publisher</h1>
							<p>Passionate about real impact, and proud winner of the IPG's Publisher of the year 2020</p>
							
							<input type="button" class="btn btn-warning btn-lg nature" name="submit" value="Full Guideline">
						</div>
			</div>
			
		</div>-->
				
			<!--<a class="carousel-control-prev" data-slide="prev"></a>
			<a class="carousel-control-next" data-slide="next"></a>-->
							
	</div>
	<!--end slider-->


	
	<!--section-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="sector">
					<h4>Journals, books & databases</h4>
				</div>
				<div class="section1">
					<h6><a href="login.php" class="text-white">Author&Reviewer </a></h6>
				</div>
				<div class="section1">
					<h6><a href="why.php" class="text-white">Author guidelines & information </a></h6>
				</div>
				<div class="section1">
					<h6><a href="pree_review.php" class="text-white">Pree reviewer information</a></h6>
				</div>
				<div class="section1">
					<h6><a href="" class="text-white">Open access</a></h6>
				</div>
				<div class="section1">
					<h6><a href="" class="text-white">Our journals</a></h6>
				</div>
				<div class="section1">
					<h6><a href="" class="text-white">Research tools</a></h6>
				</div>
				<div class="section1">
					<h6><a href="" class="text-white">Our editorial board members</a></h6>
				</div>
			</div>
			
			
			<div class="col-md-4 section2">
				<p>No matter how many times you have done it, it’s an incredible feeling to publish an article.

					<br><br>Seeing months, maybe years of hard work finalised, ready to go out into the world and earn recognition, is something to treasure.

					<br><br>We do all we can to help you reach that point smoothly. And we will stay with you as you navigate the world as a published author, helping you to maximise the impact of your work.</p>
			
			<!--	<input type="button" class="btn btn-info btn-lg nature" name="submit" value="Submit your article">-->
			</div>
			
			
			<div class="col-md-4 section3">
				<h1>Quick links:</h1>
					<div class="section4">
						<h6><a href="" class="text-white">Author responsibilities:ethical guidelines and code of conduct for author</a></h6>
					</div>
					<div class="section4">
					<h6><a href="" class="text-white">Licences,copyright & permission</a></h6>
					</div>
					<div class="section4">
						<h6><a href="" class="text-white">Processes & policies</a></h6>
					</div>
					<div class="section4">
					<h6><a href="" class="text-white">Insight to inspire your work</a></h6>
					</div>
					<div class="section4">
					<h6><a href="" class="text-white">Benefits of publishing with us</a></h6>
					</div>
			</div>
			
		</div>
	</div>
	<!--end section-->

	<!-- Featured List -->
	<section id="featured-list">
					<div class="container">
						<div class="scrolling">
							<ul class="clearfix">
								<li class="apply online">
									<a href="how-to-submit.html" title="Apply Online" >
										<div class="inner">
											 <i class="fa fa-cloud-upload" aria-hidden="true"></i>
										</div>
										<h6>Submit Article</h6>
									</a>
							  </li>
								<li class="arrow courses">
									<a href="#" title="Find Courses" >
										<div class="innernew">
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i> <h6>3 Days </h6>										</div>
										
									</a>
								</li>
								<li class="find courses">
									<a href="reviewprocess.html" title="Find Courses" >
										<div class="inner">
											<i class="fa fa-check-square" aria-hidden="true"></i></div>
										<h6>Review Process </h6>
									</a>
								</li>
								<li class="arrow courses">
									<a href="#" title="Find Courses" >
										<div class="innernew">
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i> <h6>&nbsp;</h6>										</div>
									</a>
								</li>
								<li class="schools">
									<a href="how-to-pay-fees.html" title="Schools" >
										<div class="inner">
											 <div class="round-icon"><i class="fa fa-credit-card icons" aria-hidden="true"></i></div>
										</div>
										<h6>Pay Fees</h6>
									</a>
								</li>
								<li class="arrow courses">
									<a href="#" title="Find Courses" >
										<div class="innernew">
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i> <h6>2 Days </h6>										</div>
									</a>
								</li>
								<li class="leadership">
									<a href="how-to-submit.html" title="Leadership" >
										<div class="inner">
											     <div class="round-icon"><i class="fa fa-upload icons" aria-hidden="true"></i></div>
										</div>
										<h6>Publish online </h6>
									</a>
								</li>
								<li class="arrow courses">
									<a href="#" title="Find Courses" >
										<div class="innernew">
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i> <h6>3 Days </h6>										</div>
									</a>
								</li>
								<li class="scholarship">
									<a href="#" title="Scholarship" >
										<div class="inner">
											<i class="fa fa-paper-plane" aria-hidden="true"></i></div>
										<h6>Dispatch Copy </h6>
									</a>
								</li>
							</ul>
					</div>
				</div>
			</section>
			<!-- /Featured List -->
			 <!-- Campus Short Info -->
			 <section id="campus-short-info">
				<div class="row">
						<div class="col-sm-4 column our-offer">
					<figure class="image">
				        <a href="# " target="_blank">					
                         <img class="lazy" src="image/Call+for+Papers+copy.jpg" alt="icon"></img></a>
					</figure>
						
					</div>

					
					<div class="col-sm-4 column">
						<a href="#" target="_blank">
						<figure class="image">
								<img class="lazy" src="image/launchpad-sml12.png" alt="icon"></img>
							</figure>
						</a>
					</div>

					
					<div class="col-sm-4 column our-offer">
					<figure class="image">
				        <a href="#" target="_blank">
                        <img class="lazy" src="image/iosr.jpg" alt="icon"></img></a>
					</figure>
						
					</div>
	
				</div>
			</section>




	<!--EXCLUSIVE FEATURES
		<div class="container-fluid features">
			<div class="row">
				<div class="col-md-12">
					<h2>OUR EXCLUSIVE FEATURES</h2>
				</div>
			</div>
		</div>

		<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 content">
			<img src="image/images.png" style="width:100px; height:100px; border-radius:50%">
			<h4>OPEN ACCESS</h4>
			With open access, any researchers can read and build on the findings of others without restriction and without paying any fee which accelerates authors' discoveries among all.	
			</div>
			
			<div class="col-md-3 content1">
			<img src="image/depositphotos_122318372-stock-photo-symbol-copyright-symbol-on-a.jpg" style="width:100px; height:100px; border-radius:50%">
			<h4>NOT COPYRIGHT FORM</h4>
				Quest Journals Inc does not take any copyright of paper from author. It means author has fully authorized person of reusing and selling that published material of paper.			
			</div>
			
			<div class="col-md-3 content2">
			<img src="image/icon_benefit_400x214.png" style="width:100px; height:100px; border-radius:50%">
			<h4>CITATION BENEFITS</h4>
				The main motivation for most authors to publish in an open-access journal is increased visibility and ultimately a citation advantage. Research citations of articles in a hybrid.
			</div>
			
			<div class="col-md-3 content3">
			<img src="image/783177-200.png" style="width:100px; height:100px; border-radius:50%">
				<h4>PEER REVIEW PROCESS</h4>
				Peer Review Process Fast High-level peer review, production and publishing processes.
			</div>
		</div>
	</div>

	END EXCLUSIVE FEATURES-->



	<!--Technology
	<section class="technology">
		<div class="container-fluid tech">
			<div class="row">
				<div class="col-md-12">
					<h2>HOW WE DIFFERENT FROM <br>OTHERS</h2>
				</div>
			</div>
		</div>


		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
					<img src="image/img-1.jpg" class="img">
					<b>No boundation</b>
					<p style="margin-top: 15px;">Many journal have hidden boundation that cannot use published work for future 
					extension. It spoils the complete research plaining for researchers</p>
				</div>


				<div class="col-md-2">
					<img src="image/img-4.jpg" class="img">
					<b>Latest technology</b>
					<p style="margin-top: 15px;">It takes much time and effoet to change the backbone technology of journal. Most of the journal software is outdated for today's use. Many available software is not searching-friendly and have poor data security.</p>
				</div>

				<div class="col-md-2">
					<img src="image/img-6.jpg" class="img">
					<b>Ethical Review Process</b>
					<p style="margin-top: 15px;">Most of journal are not recognised by good universities due to un-ethical review process. It should be proper blind peer review process.</p>
				</div>


				<div class="col-md-2">
					<img src="image/img-2.jpg" class="img">
					<b>Free Paper Policy</b>
					<p style="margin-top: 15px;">Many journals assure authors that journal will correct grammer of your article but in actual there is no such mechanism happen</p>
				</div>

				<div class="col-md-2">
					<img src="image/img-3.jpg" class="img">
					<b>Truley Indexing </b>
					<p style="margin-top: 15px;">Many Journals listed lots of indexing in its list but practically there are very indexing in the world which has worth.</p>
				</div>

				<div class="col-md-2">
					<img src="image/img-5.jpg" class="img">
					<b>Data Security</b>
					<p style="margin-top: 15px;">It has been found that some un-ethical journal sell the data of submitted articles for earning small amount.</p>
				</div>
			</div>
		</div>
	</section>
	end technology-->

	


	<!--Authors-->
		<div class="container-fluid authors">
			<div class="row">
				<div class="col-md-12">
					<h2>For Authors</h2>
				</div>
			</div>
		</div>


		<div class="container-fluid ">
			<div class="row">
				<div class="col-md-2">
					    <div>
						<a href="" target="_blank">
							<div class="view1 view1-sixth" style="margin-bottom: 5px; background-color: #eee; border: 1px solid #dcdcdc; padding: 10px;">
								<img src="image/d2.jpg" alt="journal publication sites,free journal publication sites,international journal publication sites,international journals with free publication charges" class="img-responsive" alt="" style="    width: 100%; height: 150px;">
									<p class="b-over" style="   padding: 5px 0px; text-align: center; text-transform: uppercase; background-color: #4796f3; color: #fff;"><b>Istruction for Author</b></p>
							</div>
						</a>
						</div>
					</div>


				<div class="col-md-2">
						<a href="" target="_blank">
							<div class="view1 view1-sixth" style="margin-bottom: 5px; background-color: #eee; border: 1px solid #dcdcdc; padding: 10px;">
								<img src="image/d10.jpg" alt="journal publication sites,free journal publication sites,international journal publication sites,international journals with free publication charges" class="img-responsive" alt="" style="    width: 100%; height: 150px; ">
									<p class="b-over" style="   padding: 5px 0px; text-align: center; text-transform: uppercase; background-color: #4796f3; color: #fff;"><b>Editorial Board</b></p>
							</div>
						</a>
					</div>


				<div class="col-md-2 ">
						<a href="" target="_blank">
							<div class="view1 view1-sixth" style="margin-bottom: 5px; background-color: #eee; border: 1px solid #dcdcdc; padding: 10px;">
								<img src="image/d9.png" alt="journal publication sites,free journal publication sites,international journal publication sites,international journals with free publication charges" class="img-responsive" alt="" style="    width: 100%; height: 150px; ">
									<p class="b-over" style="   padding: 5px 0px; text-align: center; text-transform: uppercase; background-color: #4796f3; color: #fff;"><b>Peer review Process</b></p>
							</div>
						</a>
					</div>


					<div class="col-md-2">
						<a href="" target="_blank">
							<div class="view1 view1-sixth" style="margin-bottom: 5px; background-color: #eee; border: 1px solid #dcdcdc; padding: 10px;">
								<img src="image/d1.jpg" alt="journal publication sites,free journal publication sites,international journal publication sites,international journals with free publication charges" class="img-responsive" alt="" style="    width: 100%; height: 150px; ">
									<p class="b-over" style="   padding: 5px 0px; text-align: center; text-transform: uppercase; background-color: #4796f3; color: #fff; text-transform: uppercase; background-color: #4796f3; color: #fff;"><b>Archives</b></p>
							</div>
						</a>
					</div>

					<div class="col-md-2">
						<a href="" target="_blank">
							<div class="view1 view1-sixth" style="margin-bottom: 5px; background-color: #eee; border: 1px solid #dcdcdc; padding: 10px;">
								<img src="image/d5.jpg" alt="journal publication sites,free journal publication sites,international journal publication sites,international journals with free publication charges" class="img-responsive" alt="" style="    width: 100%; height: 150px; ">
									<p class="b-over" style="   padding: 5px 0px; text-align: center; text-transform: uppercase; background-color: #4796f3; color: #fff;"><b>Article Processing Charge</b></p>
							</div>
						</a>
					</div>

					<div class="col-md-2">
						<a href="" target="_blank">
							<div class="view1 view1-sixth" style="margin-bottom: 5px; background-color: #eee; border: 1px solid #dcdcdc; padding: 10px;">
								<img src="image/d1.jpg" alt="				international journal of research,list of paper publishing sites,International journal of engineering, paid ugc approved journals, technical paper publishing sites, journals to publish research paper," class="img-responsive" alt="" style="    width: 100%; height: 150px; ">
									<p class="b-over" style="   padding: 5px 0px; text-align: center; text-transform: uppercase; background-color: #4796f3; color: #fff;"><b>Submit Manuscript</b></p>
							</div>
						</a>
					</div>
			</div>
		</div>
	<!--End Authors-->

	<!-- Testimonials -->
	<section id="journal" class="section" style="background-color: #fff; margin-top:40px;">
					<div class="container">
						<article class="post">
							<h2>About Uttaranchal University </h2>
							<div class="content-block">
						<h4>Overview</h4>

						<p>The  Journal of Science and Technology promotes public awareness and understanding in different aspects of scientific research and aims to propagate innovative research and eminence in knowledge.</p>

						<p>The journal is committed to the publication of original research articles, reviews and notes in fields of biological, chemical, physical, geographical, mathematical, statistical and technological advancement. Articles representing the latest theoretical research and experimental results in the field of science are encouraged to be covered by the journal.</p>

						<p>JOST provides a platform for the promulgation of research outputs and activities in field of science and also to amalgamate theoretical research with industrial development thus making the scientific research authentic and more accurate.</p>
						</div>

						<div class="content-block">
						<div class="row">
						<div class="col-sm-6">
						<h4>List of Journal</h4>

						<ul>
							<li><a href="IOSR-JEN.html" style="color:#a93226;"> Journal of Engineering (JEN) </a></li>
													
													<li><a href="" style="color:#a93226;"> Journal of Computer Engineering (JCE)</a></li>
													<li><a href="" style="color:#a93226;"> Journal of Electrical and Electronics Engineering (JEEE)</a></li>
													<li><a href="" style="color:#a93226;"> Journal of Mechanical and Civil Engineering (JMCE)</a></li>
													<li><a href="" style="color:#a93226;"> Journal of Electronics and Communication Engineering(JECE)</a></li>
													<li><a href="" style="color:#a93226;"> Journal of VLSI and Signal Processing   (JVSP)</a></li>
													<li><a href="" style="color:#a93226;"> Journal on Mobile Computing & Application (JMCA)</a></li>
													
								<li><a href="" style="color:#a93226;"> Journal of Polymer and Textile Engineering (IOSR-JPTE)</a></li>
													<li><a href="" style="color:#7f66ff;"> Journal of Humanities and Social Science (JHSS)</a></li>
														<li><a href="" style="color:#7f66ff;"> Journal of Research & Method in Education (JRME)</a></li>
													
														<li><a href="" style="color:#7f66ff;"> Journal of Business and Management (JBM)</a></li>
														<li><a href="" style="color:#7f66ff;"> Journal of Economics and Finance (JEF)</a></li>
																	
						</ul>
						</div>
						<div class="col-sm-6">
						<h5>&nbsp;</h5>

						<ul>
						<li><a href="" style="color:#4f6228;"> Journal of Pharmacy (PHR)</a></li>

						<li><a href="" style="color:#4f6228;"> Journal of Pharmacy and Biological Science (JPBS)</a></li>
						
						<li><a href="" style="color:#4f6228;"> Journal of Nursing and Health Science (JNHS)</a></li>
						
						<li><a href="" style="color:#4f6228;"> Journal of Dental and Medical Sciences (JDMS)</a></li>
						
						<li><a href="" style="color:#4f6228;"> Journal of Agriculture and Veterinary Science (JAVS)</a></li>

													<li><a href="" style="color:#3498db;"> Journal of Sports and Physical Education (IOSR-JSPE)</a></li>
												
										
													<li><a href="" style="color:#3498db;"> Journal of Environmental Science, Toxicology and Food Technology</a></li>
													<li><a href="" style="color:#3498db;"> Journal of Biotechnology and Biochemistry (JBB)</a></li>	
													<li><a href="" style="color:#C30;"> Journal of Applied Physics (JAP)</a></li>
												<li><a href="" style="color:#C30;"> Journal of Applied Chemistry (JAC)</a></li>
												<li><a href="" style="color:#C30;"> Journal of Mathematics (JM)</a></li>
							
														<li><a href="" style="color:#C30;"> Journal of Applied Geology and Geophysics (JAGG)</a></li>
							
													
						</ul>
						</div>
						</div>
						</div>
					</article>
		</div>
		</section> 

<!--publish research paper-->
<section id="read-faq">
				<div class="container">
					<h4>Have some questions? Read our FAQ's <a href="doc/FAQs.pdf" target="_blank" class="button2 btn btn-info">View FAQs</a></h4>
				</div>
			</section>

	<!--end publish research papaer-->

<!--	<div class="container">
    
			<marquee width="30%" direction="left" height="50px">				
							
  <h2 style="text-align:center; padding: 20px;font-size:18px; margin-bottom:10px;">Indexing and Abstracting </h2>
   <section class="customer-logos slider">
              
      <div class="slide"><img src="image/1597910660_9e9a8a71adebf5c923ba.jpeg" alt="Top free Journal in india"></div>
      
             
      <div class="slide"><img src="image/1597916721_9560575e60ac33b026c7.jpeg" alt="Edocr certified journal"></div>
      
             
      <div class="slide"><img src="image/1597916761_c342d86ee191618a4231.jpeg" alt="-"></div>
      
             
      <div class="slide"><img src="image/1597916773_8d417cdd8e9e524431c3.jpeg" alt="-"></div>
      
             
      <div class="slide"><img src="image/1641838404_6509561db7b28dfe16e6.png" alt="-GS"></div>
      
             
      <div class="slide"><img src="image/1600924704_c3f75b44aefc5332f4f0.png" alt="researchbib"></div>
      
             
      <div class="slide"><img src="image/1600926267_36e120c55a08d2cb000d.png" alt="ASI"></div>
      
             
      <div class="slide"><img src="image/1620936774_7e405375442679d1fe9b.gif" alt="PAL"></div>
      
             
      <div class="slide"><img src="image/1620936098_a983cc2b6ab5f91bec91.jpg" alt="ak"></div>
      
             
      <div class="slide"><img src="image/1620936703_d6d1a8cd8878cad205fd.png" alt="wc"></div>
      
             
      <div class="slide"><img src="image/1620960750_979b1d03066191b7f712.jpg" alt="a"></div>
      
             
      <div class="slide"><img src="image/1623075865_7dee1890bb7bb5acdf8f.jpg" alt="DRJI"></div>
      
         </section>
   

</div>-->




			
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
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://transpotation.com" target="_blank">Priyanka & Neha</a></p>
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