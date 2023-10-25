<?php
    if (isset($_POST['cart1'])) {
        include('../include\connection.php');
        $q="INSERT INTO `index_cart` (`product_name`, `quantity`, `price`) VALUES ('watch', '1', '150')";
        $r=mysqli_query($conn,$q);
        if ($r) {
        echo "<script>alert('Your watch is added to cart')</script>";
        }
        else {
        echo "<script>alert('We are facing some issue try again later')</script>";
        }
        echo "<script>window.location='../shoppp.php'</script>";
    }
?>
<?php
include('../include\connection.php');
    if (isset($_POST['cart2'])) {
        $q="INSERT INTO `index_cart` (`product_name`, `quantity`, `price`) VALUES ('BeautyProducts', '1', '300')";
        $r=mysqli_query($conn,$q);
        if ($r) {
        echo "<script>alert('Your Beautyproduct is added to cart')</script>";
        }
        else {
        echo "<script>alert('We are facing some issue try again later')</script>";
        }
        echo "<script>window.location='../shoppp.php'</script>";
    }
?>

<?php
    if (isset($_POST['cart3'])) {
        include('../include\connection.php');
        $q="INSERT INTO `index_cart` (`product_name`, `quantity`, `price`) VALUES ('RoomFlashLight', '1', '500')";
        $r=mysqli_query($conn,$q);
        if ($r) {
        echo "<script>alert('Your Room Flash Light is added to cart')</script>";
        }
        else {
        echo "<script>alert('We are facing some issue try again later')</script>";
        }
        echo "<script>window.location='../shoppp.php'</script>";
    }
?>

<?php
    if (isset($_POST['cart4'])) {
        include('../include\connection.php');
        $q="INSERT INTO `index_cart` (`product_name`, `quantity`, `price`) VALUES ('RoomFlashLight', '1', '600')";
        $r=mysqli_query($conn,$q);
        if ($r) {
        echo "<script>alert('Your Room Flash Light is added to cart')</script>";
        }
        else {
        echo "<script>alert('We are facing some issue try again later')</script>";
        }
        echo "<script>window.location='../shoppp.php'</script>";
    }
?>

<?php
    if (isset($_POST['cart5'])) {
        include('../include\connection.php');
        $q="INSERT INTO `index_cart` (`product_name`, `quantity`, `price`) VALUES ('Officebag', '1', '50')";
        $r=mysqli_query($conn,$q);
        if ($r) {
        echo "<script>alert('Your Office bag is added to cart')</script>";
        }
        else {
        echo "<script>alert('We are facing some issue try again later')</script>";
        }
        echo "<script>window.location='../shoppp.php'</script>";
    }
?>

<?php
    if (isset($_POST['cart6'])) {
        include('../include\connection.php');
        $q="INSERT INTO `index_cart` (`product_name`, `quantity`, `price`) VALUES ('Charging car', '1', '30')";
        $r=mysqli_query($conn,$q);
        if ($r) {
        echo "<script>alert('Your Charging car is added to cart')</script>";
        }
        else {
        echo "<script>alert('We are facing some issue try again later')</script>";
        }
        echo "<script>window.location='../shoppp.php'</script>";
    }
?>

<?php
    if (isset($_POST['cart7'])) {
        include('../include\connection.php');
        $q="INSERT INTO `index_cart` (`product_name`, `quantity`, `price`) VALUES ('Blutooth Speaker', '1', '100')";
        $r=mysqli_query($conn,$q);
        if ($r) {
        echo "<script>alert('Your Blutooth Speaker is added to cart')</script>";
        }
        else {
        echo "<script>alert('We are facing some issue try again later')</script>";
        }
        echo "<script>window.location='../shoppp.php'</script>";
    }
?>

<?php
    if (isset($_POST['cart8'])) {
        include('../include\connection.php');
        $q="INSERT INTO `index_cart` (`product_name`, `quantity`, `price`) VALUES ('Charger', '1', '700')";
        $r=mysqli_query($conn,$q);
        if ($r) {
        echo "<script>alert('Your Charger is added to cart')</script>";
        }
        else {
        echo "<script>alert('We are facing some issue try again later')</script>";
        }
        echo "<script>window.location='../shoppp.php'</script>";
    }
?>