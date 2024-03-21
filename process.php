<?php
	session_start();
	include 'config.php';

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$mobile = $_POST['name'];
		$dob = $_POST['dob'];
		$address = $_POST['address'];
		$state = $_POST['state'];
		$country = $_POST['country'];
		$branch = $_POST['branch'];
		$qualification = $_POST['qualification'];
		$affiliation = $_POST['affiliation'];
		$designation = $_POST['designation'];
		$experience = $_POST['experience'];
		$file = $_FILES['resume'];

		$filename = $file['name'];
		$filepath = $file['tmp_name'];
		$fileerror = $file['error'];

		if ($fileerror == 0) {
			$destfile = 'upload/'.$filename;
			move_uploaded_file($filepath, $destfile);


			$sql = "INSERT INTO review (name, email, phone, mobile, dob, address, state, country, branch, qualification, affiliation, designation, experience,resume) VALUES('$name','$email','$phone','$mobile','$dob ','$address','$state','$country','$branch','$qualification','$affiliation','$designation','$experience','$destfile')";

			$query = mysqli_query($con ,$sql);

			if($query){
				
			}else{
				
			}
		} else {
			  
			}

		
}

if(isset($_POST['edit']))
{
	$title =  $_POST['title'];
	$research = $_POST['research_area'];

	

	$abstract = $_POST['abstract'];
	$keyword = $_POST['keywords'];
	$author_name = $_POST['author_name'];
	$author_designation = $_POST['author_designation'];
	$author_org = $_POST['author_org'];
	$author_email = $_POST['author_email'];
	$author_mob = $_POST['author_mob'];
	
	$address = $_POST['address'];
	$country = $_POST['country'];
	$state = $_POST['state'];
	$district = $_POST['district'];
	$pin = $_POST['pin'];

	$file = $_FILES['pdf_file'];

		$filename = $file['name'];
		$filepath = $file['tmp_name'];
		$fileerror = $file['error'];

		if ($fileerror == 0) {
			$pdffile = 'upload/'.$filename;
			move_uploaded_file($filepath, $pdffile);


			$sqls = "INSERT INTO author (title, research_area, pdf_file,abstract,keyword,author_name,author_designation,author_org,author_email,author_mob,address,country,state,distict,pin) VALUES('$title','$research','$pdffile','$abstract','$keyword','$author_name','$author_designation','$author_org','$author_email','$author_mob','$address','$country','$state','$district','$pin')";

			$iquery = mysqli_query($con ,$sqls);

			if($iquery){
				echo "Inserted";
			}else{
				echo "not submitted";
			}
		} else {
			  echo "No button hs been cliced";
			}

		


}

?>
