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
  <title>User details</title>
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
  <!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <?php include('includeadmin\header.php');?>
  </header>
  

  <!--================Cart Area =================-->
  <section class="cart_area">
      <div class="container">
          <div class="cart_inner">
              <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">Sr.no</th>
                              <th scope="col">Username</th>
                              <th scope="col">Email</th>
                              <th scope="col">Paassword</th>
                              <?php
                                    include('includeadmin\connection.php');
                                    $q="select * from user";
                                    $r=mysqli_query($conn,$q);
                                    $n=mysqli_num_rows($r);
                                    $a=1;
                                    while ($row=mysqli_fetch_assoc($r)) {
                              ?>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>
                                  <div class="media">
                                      <div class="media-body">
                                          <p><?php echo $a;?></p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <h5><?php echo $row['username'];?></h5>
                              </td>
                              <td>
                                  <div class="product_count">
                                      <h5><?php echo $row['email'];?></h5>
                                  </div>
                              </td>
                              <td>
                                  <div class="product_count">
                                      <h5><?php echo $row['password'];$a++;}?></h5>
                                  </div>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </section>
  <!--================End Cart Area =================-->



  <!--================ Start footer Area  =================-->	
	<footer>
    <?php include ('includeadmin\footer.php')?>
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
    echo "<script>window.location='../login.php'</script>";
}
?>