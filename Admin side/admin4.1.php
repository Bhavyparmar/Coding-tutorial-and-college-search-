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
  <title>Faq</title>
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css"> -->

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header_area">
    <?php include('includeadmin\header.php');?>
  </header>
  <section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_form_inner register_form_inner">
						<h3>Faq upload update</h3>
						<form class="row login_form"  id="register_form" method="post"  enctype="multipart/form-data" name="frm">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="que" placeholder="Question" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Question'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="city" name="ans" placeholder="Answer" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Answer'">
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
    <footer>
    <?php include ('includeadmin\footer.php')?>
	</footer>
    <?php
    if (isset($_POST['ok'])) {
            include('includeadmin/connection.php');
            $id=$_REQUEST['id'];
            $query="update faq set que='".$_POST['que']."',ans='".$_POST['ans']."' where id='$id'";
            $result= mysqli_query($conn,$query);
            if($result)
            {
                echo"<script>alert('Faqs updated Sucessfully..')</script>";
            }
            else {
                echo"<script>alert(' Not Uploaded due to some technical issue')</script>";
            }
        }
    ?>
</body>
</html>
<?php
}
else {
    echo "<script>window.location='../login.php'</script>";
}
?>