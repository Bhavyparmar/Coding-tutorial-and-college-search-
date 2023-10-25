<?php
$id=$_REQUEST['id'];
$conn=mysqli_connect("localhost","root","","studentbread");
$q="delete from blog where id='$id'";
$result= mysqli_query($conn,$q);
					if($result)
					{
						echo"<script>alert('Deleted successfully..')</script>";
                        echo "<script>window.location='../admin4.1.php'</script>";
					}
					else {
						echo"<script>alert(' Not updated due to some technical issue')</script>";
					}
?>