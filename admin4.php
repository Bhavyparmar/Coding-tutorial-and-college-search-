<?php
session_start();
if ($_SESSION['name'] && $_SESSION['pass']) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog upload</title>
  <link rel="stylesheet" href="./Admin side/vendors/bootstrap/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="./Admin side/vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="./Admin side/vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="./Admin side/vendors/linericon/style.css">
  <link rel="stylesheet" href="./Admin side/vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="./Admin side/vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="./Admin side/vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="./Admin side/vendors/nouislider/nouislider.min.css"> -->
  <link rel="stylesheet" href="./Admin side/css/style.css">
</head>
<body>
  <!--================ Start Header Menu Area =================-->
<?php include('include/aheader.php');?>
	
  <!--================Cart Area =================-->
  <section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_form_inner register_form_inner">
						<h3>Blog upload</h3>
						<form class="row login_form"  id="register_form" method="post"  enctype="multipart/form-data" name="frm">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="title" placeholder="Blog title" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Blog title'">
							</div>
							<div class="col-md-12 form-group">
								<input type="date" class="form-control" id="city" name="date" placeholder="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'City'">
							</div>
							<div class="col-md-12 form-group">
								<input type="input" class="form-control" id="cpara" name="cpara" placeholder="paragraph" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Paragraph'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="clink" name="clink" placeholder="link" onfocus="this.placeholder = ''" onblur="this.placeholder = 'link'">
                            </div>
							<div class="col-md-12 form-group">
                                <input type="file" class="form-control" id="email" name="photo" placeholder="Product Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Product Name'">
                                <label>Photo</label>
                            </div>
							<div class="col-md-12 form-group">
								<button type="submit" value="ok" name="ok" class="button button-register w-100">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
  <?php
	  	if(isset($_POST['ok']))
		{
			include('conn.php');		
			$t=$_FILES["photo"]["name"];
		if (file_exists("upload/".$_FILES["photo"]["name"])){	
					$rand_name = md5(time());
					$rand_name=rand(0,999999999);
					$pic=$rand_name;
			$pic="upload/".$rand_name.$_FILES["photo"]["name"];
			move_uploaded_file($_FILES['photo']['tmp_name'],$pic);
		}
		else{
		$pic="upload/".$_FILES["photo"]["name"];		
		move_uploaded_file($_FILES['photo']['tmp_name'],$pic);
				}
		    $query="insert into blog(title,date,para,link,img) values('".$_POST['title']."','".$_POST['date']."','".$_POST['cpara']."','".$_POST['clink']."','$pic')";
				$result= mysqli_query($conn,$query);
					if($result)
					{
						echo"<script>alert('blog uploaded Sucessfully..')</script>";
					}
					else {
						echo"<script>alert(' Not Uploaded due to some technical issue')</script>";
					}
				}
?>
  <!--================End Cart Area =================-->

  <!--================ Start footer Area  =================-->	
	<footer>
    <?php include ('./Admin side/includeadmin\footer.php')?>
	</footer>
	<!--================ End footer Area  =================-->

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
<?php
}
else {
    echo "<script>window.location='login.php'</script>";
}
?>