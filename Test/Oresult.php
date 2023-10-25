    <?php
    include('conn.php');
    $q="select * from mcqc";
    $r=mysqli_query($conn,$q);
    $n=mysqli_num_rows($r);
    $dbv=array();
    echo "<table>";
    echo "<thead>";
    echo "<h2>Answer</h2>";
    echo "</thead>";
    while ($row=mysqli_fetch_assoc($r)) {
        echo "<tr>";
        echo "<td>";
        echo $row['ans'];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<span style='margin-left: 500px;'>";
    echo "<table>";
    ?>