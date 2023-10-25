<?php
        if (isset($_POST['ok'])) {
            include('../include\connection.php');
            $q="INSERT INTO `review` (`name`, `email`, `subject`, `review`) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['subject']."', '".$_POST['textarea']."');";
            $r=mysqli_query($conn,$q);
            if ($r) {
                echo "<script>alert('Your review is recorded')</script>";
            }
            else {
                echo "<script>alert('We are facing some error try again later')</script>";
            }
        }
        echo "<script>window.location='../single-product.php'</script>";
?>