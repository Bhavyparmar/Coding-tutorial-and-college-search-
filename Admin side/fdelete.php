<?php
$id=$_REQUEST['id'];
include('includeadmin/connection.php');
$q="delete from faq where id='$id'";
$result= mysqli_query($conn,$q);
					if($result)
					{
						echo"<script>alert('Deleted successfully..')</script>";
                        echo "<script>window.location='admin4.php'</script>";
					}
					else {
						echo"<script>alert(' Not updated due to some technical issue')</script>";
					}
?>