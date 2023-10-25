<?php
    if (isset($_POST['cart1'])) {
        include('../include\connection.php');
        $q="INSERT INTO `favorite` (`product_name`) VALUES ('watch');";
        $r=mysqli_query($conn,$q);
        if ($r) {
        echo "<script>alert('Your watch is added to favorite list')</script>";
        }
        else {
        echo "<script>alert('We are facing some issue try again later')</script>";
        }
        echo "<script>window.location='../category.php'</script>";
    }
?>

<?php
    if (isset($_POST['cart2'])) {
    include('../include\connection.php');
    $q="INSERT INTO `favorite` (`product_name`) VALUES ('Women Facewash');";
    $r=mysqli_query($conn,$q);
    if ($r) {
    echo "<script>alert('Your Women Facewash is added to favorite list')</script>";
    }
    else {
    echo "<script>alert('We are facing some issue try again later')</script>";
    }
            echo "<script>window.location='../category.php'</script>";

}
?>

<?php
    if (isset($_POST['cart3'])) {
        include('../include\connection.php');
        $q="INSERT INTO `favorite` (`product_name`) VALUES ('Room flash light');";
        $r=mysqli_query($conn,$q);
        if ($r) {
        echo "<script>alert('Your Room flash light is added to favorite list')</script>";
        }
        else {
        echo "<script>alert('We are facing some issue try again later')</script>";
        }
                echo "<script>window.location='../category.php'</script>";

    }
?>

<?php
    if (isset($_POST['cart4'])) {
        include('../include\connection.php');
        $q="INSERT INTO `favorite` (`product_name`) VALUES ('Room flash light');";
        $r=mysqli_query($conn,$q);
        if ($r) {
        echo "<script>alert('Your Room flash light is added to favorite list')</script>";
        }
        else {
        echo "<script>alert('We are facing some issue try again later')</script>";
        }
                echo "<script>window.location='../category.php'</script>";

    }
?>

<?php
    if (isset($_POST['cart5'])) {
        include('../include\connection.php');
        $q="INSERT INTO `favorite` (`product_name`) VALUES ('Man Office Bag');";
        $r=mysqli_query($conn,$q);
        if ($r) {
        echo "<script>alert('Your Man Office Bag is added to favorite list')</script>";
        }
        else {
        echo "<script>alert('We are facing some issue try again later')</script>";
        }
                echo "<script>window.location='../category.php'</script>";

    }
?>

<?php
    if (isset($_POST['cart6'])) {
        include('../include\connection.php');
        $q="INSERT INTO `favorite` (`product_name`) VALUES ('Charging car');";
        $r=mysqli_query($conn,$q);
        if ($r) {
        echo "<script>alert('Your Charging car is added to favorite list')</script>";
        }
        else {
        echo "<script>alert('We are facing some issue try again later')</script>";
        }
                echo "<script>window.location='../category.php'</script>";

    }
?>

<?php
    if (isset($_POST['cart7'])) {
        include('../include\connection.php');
        $q="INSERT INTO `favorite` (`product_name`) VALUES ('Blutooth Speaker');";
        $r=mysqli_query($conn,$q);
        if ($r) {
        echo "<script>alert('Your Blutooth Speaker is added to favorite list')</script>";
        }
        else {
        echo "<script>alert('We are facing some issue try again later')</script>";
        }
                echo "<script>window.location='../category.php'</script>";

    }
?>

<?php
    if (isset($_POST['cart8'])) {
        include('../include\connection.php');
        $q="INSERT INTO `favorite` (`product_name`) VALUES ('Charger');";
        $r=mysqli_query($conn,$q);
        if ($r) {
        echo "<script>alert('Your Charger is added to favorite list')</script>";
        }
        else {
        echo "<script>alert('We are facing some issue try again later')</script>";
        }
                echo "<script>window.location='../category.php'</script>";

    }
?>

<?php
    if (isset($_POST['cart9'])) {
        include('../include\connection.php');
        $q="INSERT INTO `favorite` (`product_name`) VALUES ('Sport watch');";
        $r=mysqli_query($conn,$q);
        if ($r) {
        echo "<script>alert('Your Sport watch is added to favorite list')</script>";
        }
        else {
        echo "<script>alert('We are facing some issue try again later')</script>";
        }
                echo "<script>window.location='../category.php'</script>";

    }
?>