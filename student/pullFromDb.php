<?php
include 'dbConnect.php'; 

echo '<script>alert("I\'m here!");</script>';

//Networks
$netAnn = 'SELECT * FROM master WHERE subject = "networks"';  
$retnet=mysqli_query($conn, $netAnn); 
$ncount = mysqli_num_rows($retnet); 
if($ncount > 0){  
	echo "<table><tr><th>Networks</th></tr>";
while($row = mysqli_fetch_assoc($retnet)){ 
echo "<tr><td>{$row['announce']}</td></tr>";  
} 
echo "</table>";//end of while  
}
//Multimedia
$mulAnn = 'SELECT * FROM master WHERE subject = "multimedia"';  
$retmul = mysqli_query($conn, $mulAnn);  
$mcount = mysqli_num_rows($retmul);

if($mcount > 0){  
	echo "<table><tr><th>Multimedia</th></tr>";
while($row = mysqli_fetch_assoc($retmul)){ 
echo "<tr><td>{$row['announce']}</td></tr>"; 
} 
echo "</table>";//end of while  
}

//COA
$coaAnn = 'SELECT * FROM master WHERE subject = "coa"';  
$retcoa = mysqli_query($conn, $coaAnn);
$ccount = mysqli_num_rows($retcoa);  

if($ccount > 0){  
	echo "<table><tr><th>COA</th></tr>";
while($row = mysqli_fetch_assoc($retcoa)){ 
echo "<tr><td>{$row['announce']}</td></tr>";  
} 
echo "</table>";//end of while  
}

//web
$webAnn = 'SELECT * FROM master WHERE subject = "web"';  
$retweb = mysqli_query($conn, $webAnn);  
$wcount = mysqli_num_rows($retweb);

if($wcount > 0){  
	echo "<table><tr><th>Web</th></tr>";
while($row = mysqli_fetch_assoc($retweb)){ 
echo "<tr><td>{$row['announce']}</td></tr>";  
} 
echo "</table>";//end of while  
}


mysqli_close($conn);  
?>

