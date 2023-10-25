<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <!-- <title> Responsive Drop Down Navigation Menu | CodingLab </title>-->
   <link rel="stylesheet" href="css\style2.css">
  <link rel="stylesheet" href="css\contact.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<?php include("./include/header.php"); ?>
<!--contact-->
    <div class="container">
    <div class="content">
      <div class="image-box">
       <img src="img/contact.png" alt=""> 
      </div>
    <form method="post">
      <div class="topic">Send us a message</div>
      <div class="input-box">
        <input type="text" name="name" required>
        <label>Enter your name</label>
      </div>
      <div class="input-box">
        <input type="text" name="sub" required>
        <label>Enter your subject</label>
      </div>
      <div class="input-box">
        <input type="text" name="email" required>
        <label>Enter your email</label>
      </div>
      <div class="input-box">
        <input type="text" name="mess" required>
        <label>Enter your message</label>
      </div>
      <div class="input-box">
        <input type="submit" name="ok" value="Send Message">
      </div>
    </form>
  </div>
  </div>
  
</body>
</html>
<?php
if (isset($_POST['ok'])) {
  include('conn.php');
        $query="insert into contact (name,sub,email,message) values('".$_POST['name']."','".$_POST['sub']."','".$_POST['email']."','".$_POST['mess']."')";
				$result= mysqli_query($conn,$query);
					if($result)
					{
						echo"<script>alert('Your message is recorded Sucessfully..')</script>";
					}
					else {
						echo"<script>alert('Not recorded due to some technical issue')</script>";
					}
}
?>