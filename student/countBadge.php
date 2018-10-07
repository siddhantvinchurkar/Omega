<?php 
 include 'dbConnect.php';

 $countAnn='SELECT subject, count(*) FROM master GROUP BY subject';
 $result=mysqli_query($conn, $countAnn);

while ($row = $result->fetch_assoc()) {
    echo $row['count(*)']."<br>";
}
?>