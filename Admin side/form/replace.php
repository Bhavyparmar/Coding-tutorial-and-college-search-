<?php
            if(isset($_POST["ok"])){
        include ('../include\connection.php');		
        $t=$_FILES["photo"]["name"];
        if (file_exists("upload/".$_FILES["photo"]["name"]))
    {	
        $rand_name = md5(time());
        $rand_name=rand(0,999999999);
        $pic=$rand_name;
        $pic="upload/".$rand_name.$_FILES["photo"]["name"];
        move_uploaded_file($_FILES['photo']['tmp_name'],$pic);
    }
    else
        {
            $pic="upload/".$_FILES["photo"]["name"];		
            move_uploaded_file($_FILES['photo']['tmp_name'],$pic);
        }
        $query="INSERT INTO `replacement` (`name`, `email`, `product_id`, `product_name`, `photo`, `problem`) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['productid']."', '".$_POST['productname']."', '$pic', '".$_POST['problem']."')";
        $result= mysqli_query($conn,$query);
        if($result)
        {
            echo"<script>alert(' Uploaded Sucessfully..')</script>";
        }
        else {
            echo"<script>alert(' Not Uploaded..')</script>";
        }
    }
    echo "<script>window.location='../replace.php'</script>";
?>