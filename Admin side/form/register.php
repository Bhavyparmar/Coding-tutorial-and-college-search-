<?php
    if(isset($_POST["ok"])){
            include ('../include\connection.php');
            $q="INSERT INTO `register`(`username`, `email`, `password`, `cpassword`) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['confirmPassword']."')";
            if ($_POST['password'] == $_POST['confirmPassword']) {
                
                $res=mysqli_query($conn,$q);
                if ($res) {
                    echo "<script>alert('You are now registered in our website')</script>";
                }
            }
            else {
                echo "<script>alert('Your password and confirm password has to be same')</script>";
            }
    }
    echo "<script>window.location='../register.php'</script>";
?>