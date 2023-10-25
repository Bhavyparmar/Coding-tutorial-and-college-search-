<?php
session_start();
if ($_SESSION['name'] && $_SESSION['pass']) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="one.css">
</head>

<body>
    
    <form action="Three.php" method="post">
        <?php

include('conn.php');
$q="select * from mcqpy";
$r=mysqli_query($conn,$q);
$n=mysqli_num_rows($r);
$a=1;
$Sr=1;
while ($row=mysqli_fetch_assoc($r)) {
?>
        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-10 col-lg-10">
                    <div class="border">

                        <div class="question bg-white p-3 border-bottom">
                            <div class="d-flex flex-row align-items-center question-title">
                                <h3 class="text-danger">Q.<?php echo $Sr; ?></h3>
                                <h5 class="mt-1 ml-2"><?php echo $row['Que']; ?></h5>
                            </div>
                            <div class="ans ml-2">
                                <label class="radio"> <input type="radio" name="<?php echo "m".$a; ?>"
                                        value="<?php echo $row['a']; ?>"required> <span><?php echo $row['a']; ?></span>
                                </label>
                            </div>
                            <div class="ans ml-2">
                                <label class="radio"> <input type="radio" name="<?php echo "m".$a; ?>"
                                        value="<?php echo $row['b']; ?>">
                                    <span><?php echo $row['b']; ?></span>
                                </label>
                            </div>
                            <div class="ans ml-2">
                                <label class="radio"> <input type="radio" name="<?php echo "m".$a; ?>"
                                        value="<?php echo $row['c']; ?>">
                                    <span><?php echo $row['c']; ?></span>
                                </label>
                            </div>
                            <div class="ans ml-2">
                                <label class="radio"> <input type="radio" name="<?php echo "m".$a; ?>"
                                        value="<?php echo $row['d']; ?>"> <span><?php echo $row['d'];?></span>
                                </label>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
            <?php $a++;$Sr++; }?>
            <center style="margin-top:15px;"><button type="submit" value="submit" name="ok" class="btn btn-primary">Submit</button>
            <button type="reset" value="Reset" class="btn btn-danger">Reset</button> 
    </form>
</body>
<?php
    if(isset($_POST['ok']))
    {
        $a=array($_POST["m1"],$_POST["m2"],$_POST["m3"],$_POST["m4"],$_POST["m5"],$_POST["m6"],$_POST["m7"],$_POST["m8"],$_POST["m9"],$_POST["m10"]);
        include('conn.php');
        $q="select * from mcqpy";
        $r=mysqli_query($conn,$q);
        $n=mysqli_num_rows($r);
        $dbv=array();
        while ($row=mysqli_fetch_assoc($r)) {
            $dbv[]=$row['ans'];
        }
        $ri=0;
        for($z=0;$z<10;$z++)
        {
            if($a[$z]==$dbv[$z])
            {
                $ri++;
            }
        }
        echo "<center>";
        echo "<h3>Your marks from 10 out of ". $ri."</h3>";
        echo "<a href='Threeresult.php'  class='btn btn-info'>Check Answer</a></center>";
        echo "</center>";
    }
?>
</html>
<?php
}
else {
    echo "<script>alert('You need to login first to take a test')</script>";
    echo "<script>window.location='../login.php'</script>";
}
?>