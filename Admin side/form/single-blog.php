<?php
        if (isset($_POST['ok'])) {
            include('../include\connection.php');
            $q="INSERT INTO `blog` (`name`, `email id`, `blogtitle`, `review`) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['sub']."', '".$_POST['message']."')";
            $r=mysqli_query($conn,$q);
            if ($r) {
                echo "<script>alert('Your reply is recorded')</script>";
            }
            else {
                echo "<script>alert('Your reply is not recorded due to some error')</script>";
            }
        }
        echo "<script>window.location='../single-blog.php'</script>";
    ?>