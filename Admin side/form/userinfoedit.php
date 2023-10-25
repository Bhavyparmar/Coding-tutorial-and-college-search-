<?php
    if(isset($_POST["ok"])){
            include ('../include\connection.php');
            $id=$_REQUEST['id'];
            $q="UPDATE `register` SET `username` = '".$_POST['name']."', `email` = '".$_POST['email']."', `password` = '".$_POST['password']."', `cpassword` = '".$_POST['confirmPassword']."' WHERE `id` = '$id'";
            $r=mysqli_query($conn,$q);
            if ($_POST['password'] == $_POST['confirmPassword']) {
                if ($r) {
                    echo "<script>alert('Your data is updated')</script>";
                }
                else {
                    echo "<script>alert('Your data is not updated due to some error')</script>";
                }
            }
            else {
                echo "<script>alert('Your password and confoirm password have to be same')</script>";
            }
    }
    echo "<script>window.location='../userinfoedit.php'</script>";
?>