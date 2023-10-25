<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
   <!-- <title> Responsive Drop Down Navigation Menu | CodingLab </title>-->
   <link rel="stylesheet" href="css\style2.css">
   <link rel="stylesheet" href="css\footer.css">
   <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"><a href="#">Student Bread</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">Student Bread</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="index.php">HOME</a></li>
          <li><a href="college.php">COLLEGES</a></li>
          <li><a href="Courses.php">COURSES</a></li>
          <li>
            <a href="#">LANGUAGES-TEST</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="#"></a></li>
              <li class="more">
                <span><a href="#">Test</a>
                <i class='bx bxs-chevron-right arrow more-arrow'></i>
              </span>
                <ul class="more-sub-menu sub-menu">
                  <li><a href="Test\One.php">C-language</a></li>
                  <li><a href="Test\Two.php">C++-language</a></li>
                  <li><a href="Test\Five.php">JAVA-language</a></li>
                  <li><a href="Test\Four.php">SQL</a></li>
                  <li><a href="#">HTML</a></li>
                  <li><a href="Test\Three.php">PAYTHON-language</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="login.php">LOGIN/SINUP</a></li>
          <li><a href="logout.php">LOGOUT</a></li>
        </ul>
      </div>
      <div class="search-box">
        <i class='bx bx-search'></i>
        <div class="input-box">
          <input type="text" placeholder="Search...">
          </div>
          </div>
    </div>
    </nav>
    <script src="script.js"></script>
  
<!--college-->
<br><br><br><br><br><br>
  <main>
          <div class="album py-1 bg-light">
            <div class="container">
        
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              <?php
	    $con = mysqli_connect("localhost","root","","studentbread");
	    $q = "select * from collegep";
	    $r = mysqli_query($con,$q);
	    while ($row = mysqli_fetch_array($r)) {
	?>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="<?php echo $row['photo']; ?>" width='350' height='290' alt="error in loading a photo">
                    <div class="card-body">
                      <p class="card-text"><?php echo $row['cname']; echo " - ";echo $row['city']; ?></p>
                      <p class="card-text"><?php echo $row['cpara']; ?></p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="col-md-12 btn-group">
                          <a href="<?php echo $row['link']; ?>" class="btn btn-llm btn-outline-secondary">View</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
<?php }?>
              </div>
            </div>
          </div>
        
        </main>

        <!--footer-->

        <div class="footer">
        <div class="container">     
            <div class="row">                       
                <div class="col-lg-4 col-sm-4 col-xs-12">
                    <div class="single_footer">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="faq.php">FAQs</a></li>
                            <li><a href="contact.php">CONTACT US</a></li>
                            <li><a href="#">The printing and typesetting </a></li>
                            <li><a href="#">Standard dummy text</a></li>
                            <li><a href="#">Type specimen book</a></li>
                        </ul>
                    </div>
                </div><!--- END COL --> 
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single_footer single_footer_address">
                        <h4>Page Link</h4>
                        <ul>
                            <li><a href="#">Lorem Ipsum</a></li>
                            <li><a href="#">Simply dummy text</a></li>
                            <li><a href="#">The printing and typesetting </a></li>
                            <li><a href="#">Standard dummy text</a></li>
                            <li><a href="#">Type specimen book</a></li>
                        </ul>
                    </div>
                </div><!--- END COL -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single_footer single_footer_address">
                        <h4>Subscribe today</h4>
                        <div class="signup_form">                           
                            <form action="#" class="subscribe">
                                <input type="text" class="subscribe__input" placeholder="Enter Email Address">
                                <button type="button" class="subscribe__btn"><i class="fas fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="social_profile">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>                          
                </div><!--- END COL -->         
            </div><!--- END ROW --> 
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <p class="copyright">Copyright © 2022 <a href="#">Student Breads</a>.</p>
                </div><!--- END COL -->                 
            </div><!--- END ROW -->                 
        </div><!--- END CONTAINER -->
    </div>

</body>
</html>
