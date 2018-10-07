<?php
$servername="localhost";
$username="nikhil";
$password="password";
$dbname="omega";

$conn= new mysqli($servername, $username, $password, $dbname);

if(!$conn){
die("Could not connect:".mysqli_connect_error());
}
$netAnn = 'SELECT * FROM announce WHERE subject = "networks"';  
$retnet=mysqli_query($conn, $netAnn);  

if(mysqli_num_rows($retnet) > 0){  
	echo "<table><tr><th>Networks</th></tr>";
while($row = mysqli_fetch_assoc($retnet)){ 
echo "<tr><td>{$row['announce']}</td></tr>";  
} 
echo "</table>";//end of while  
}

$mulAnn = 'SELECT * FROM announce WHERE subject = "multimedia"';  
$retmul = mysqli_query($conn, $mulAnn);  

if(mysqli_num_rows($retmul) > 0){  
	echo "<table><tr><th>Multimedia</th></tr>";
while($row = mysqli_fetch_assoc($retmul)){ 
echo "<tr><td>{$row['announce']}</td></tr>"; 
} 
echo "</table>";//end of while  
}

$coaAnn = 'SELECT * FROM announce WHERE subject = "coa"';  
$retcoa = mysqli_query($conn, $coaAnn);  

if(mysqli_num_rows($retcoa) > 0){  
	echo "<table><tr><th>COA</th></tr>";
while($row = mysqli_fetch_assoc($retcoa)){ 
echo "<tr><td>{$row['announce']}</td></tr>";  
} 
echo "</table>";//end of while  
}

$webAnn = 'SELECT * FROM announce WHERE subject = "web"';  
$retweb = mysqli_query($conn, $webAnn);  

if(mysqli_num_rows($retweb) > 0){  
	echo "<table><tr><th>Web</th></tr>";
while($row = mysqli_fetch_assoc($retweb)){ 
echo "<tr><td>{$row['announce']}</td></tr>";  
} 
echo "</table>";//end of while  
}


mysqli_close($conn);  
?>

