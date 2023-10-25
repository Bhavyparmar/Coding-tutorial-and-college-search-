<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
            <center>
                <form  method="post">
                    <input type="text" name="name"  placeholder="name"><br><br>
                    <input type="text" name="email" placeholder="email"><br><br>
                    <input type="number" name="phone" placeholder="phone no"><br><br>
                    <input type="password" name="pass" placeholder="password"><br><br>
                    <input type="submit" value="ok" name="ok">
                </form>
                </center>
    <?php
        if (isset($_POST['ok'])) {
            include('conn.php');
            $q="INSERT INTO `info` (`name`, `email`, `phoneno`, `password`) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['pass']."');";
            $r=mysqli_query($conn,$q);
            if ($r) {
                echo "<script>alert('Your record is inserted')</script>";
            }
            else {
                echo "<script>alert('Your record is not inserted due to some error!!')</script>";
            }
        }
    ?>
</body>
</html>