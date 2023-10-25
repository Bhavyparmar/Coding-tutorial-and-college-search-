<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive FAQ Accordion | CodingLab </title>
   
    <link rel="stylesheet" href="css\style2.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
if(isset($_POST['ok'])){
   include ('include\connection.php');
   if ($q="select * from admin where email='".$_POST['email']."' and password='".$_POST['pass']."'") {
      $r=mysqli_query($conn,$q);
      $n=mysqli_num_rows($r);
      if ($n) {
         $_SESSION['name']=$_POST['email'];
         $_SESSION['pass']=$_POST['pass'];
         echo "<script>window.location='Admin side/admin.php'</script>";
      }
   }
   if ($q1="select * from user where email='".$_POST['email']."' and password='".$_POST['pass']."'") {
      $r=mysqli_query($conn,$q1);
      $n=mysqli_num_rows($r);
      if ($n) {
         $_SESSION['name']=$_POST['email'];
         $_SESSION['pass']=$_POST['pass'];
         echo "<script>window.location='index.php'</script>";
      }
      else {
         echo "<script>alert('Invalid username or password')</script>";
      }
   }
}
if (isset($_POST['ok1'])) {
   if ($_POST['np'] == $_POST['ncp']) {
      include ('include\connection.php');
      $q="insert into user (username,email,password) values('".$_POST['nname']."','".$_POST['nemail']."','".$_POST['ncp']."')";
      $r=mysqli_query($conn,$q);
      if ($r) {
         echo "<script>alert('You are register')</script>";
         echo "<script>window.location='index.php'</script>";
      }
      else {
         echo "<script>alert('You are not registered due to some technical issue')</script>";
      }
   }
   else{
      echo "<script>alert('You password and confirm password need to same reenter')</script>";
   }
}

?>
   </head>
<body>
<?php include("./include/header.php"); ?>
<div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login Form
            </div>
            <div class="title signup">
               Signup Form
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="login.php"  method="post" class="login">
                  <div class="field">
                     <input type="text" placeholder="Email Address" name="email" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" name="pass" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login" name="ok">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>
               </form>
               <form action="login.php" method="post" class="signup">
                  <div class="field">
                     <input type="text" placeholder="Your name" name="nname" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Email Address" name="nemail" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" name="np" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Confirm password" name="ncp" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Signup" name="ok1">
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
  
</body>
</html>
