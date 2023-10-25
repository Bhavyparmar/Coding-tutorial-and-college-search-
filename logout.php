<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['pass']);
echo "<script>window.location='login.php'</script>";
?>