<?php
    if (isset($_POST['ok'])) {
        include('../include\connection.php');
        $q="INSERT INTO `news` (`email`) VALUES ('".$_POST['email']."');";
        $r=mysqli_query($conn,$q);
        if ($r) {
        echo "<script>alert('Now we gives you regular news or update about our products')</script>";
        }
        else {
        echo "<script>alert('Currently we are facing some technical error try again later')</script>";
        }
    }
?>