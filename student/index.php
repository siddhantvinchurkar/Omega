<?php
	// Server Credentials
	$servername = "localhost";
	$username = "omega";
	$password = "uglyhorse3449";
	$dbname = "omega";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// SQL commands
	$checksql = "SELECT * FROM users WHERE eml='".$_GET['eml']."'";
	$result = $conn->query($checksql);
	while ($row = $result->fetch_assoc()) {
		echo '<script type="text/javascript">var subs="'.$row["classes"].'"; console.log(subs);</script>';
	}
	// Close connection to the database
	$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<script type="text/javascript" src="student.js"> </script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Basic meta tags-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!--Fetch minified materializecss from the CDN asynchronously-->
		<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css"  media="none" onload="if(media!='screen,projection')media='screen,projection'">
		<!--Fetch material icons from the CDN asynchronously-->
		<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"  media="none" onload="if(media!='screen,projection')media='screen,projection'">
		<!--Fetch font (Roboto) from the CDN asynchronously-->
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
		<!--Set the shortcut icon-->
		<link rel="shortcut icon" type="image/ico" href="../images/icons/favicon.ico">
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Progressive Web App meta tags-->
		<link rel="manifest" href="../manifest.json">
		<meta name="theme-color" content="#4DB6AC">
		<meta name="Description" content="Omega is a collaborative classroom platform for teachers and students alike.">
		<!--Overriden Styles-->
		<style>
			body {
			display: flex;
			min-height: 100vh;
			flex-direction: column;
			font-family: 'Roboto', sans-serif;
			background-color: #F6F6F6;
			}
			main {
			flex: 1 0 auto;
			}
			.container {
			display: flex;
			justify-content: center;
			}
			.center {
			width: 250px;
			position: absolute;
			margin: auto;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			}
			.center2 {
			opacity:0.1;
			position: absolute;
			margin: auto;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			}
			.verticalCenter{
			width: 250px;
			position: left;
			margin: auto;
			top: 0;
			right: 0;
			bottom:0;
			left: 0;
			}
			#label{
			font-family:"comic sans ms";
			background-color:black;
			color:white;
			}
			main {
			flex: 1 0 auto;
			}
			i.icon-white {
			    color: white;
			}
			#notes-nav{
				width: 300px;
				top: 65px;
			}
		}
		</style>
		<title>Omega</title>
	</head>
	<body>
		<!-- Heading Strip-->
		<header>
			<nav>
				<div class="nav-wrapper">
					<img data-target="slide-out" class="sidenav-trigger" src="../images/icons/72.png" style="height:95%; cursor: pointer;" />
					<a href="" class="brand-logo">Omega</a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
					</ul>
				</div>
			</nav>
</header>
	
<main>
	<!--Progrss Bar-->
			<div class="container" id="progressBar">
				<img src="../images/icons/512.png" class="center2" />
				<div class="progress center">
					<div class="indeterminate" style="margin-right: auto; margin-left: auto; width: 250px;"></div>
				</div>
			</div>

<!--Contents-->
<div id="pageContents" style="display:none;">
	<img src="../images/icons/512.png" class="center2" />

<!-- Sliding Navigation Bar -->
 <ul id="slide-out" class="sidenav">
    <li>
    	<div class="user-view"><div class="background">
    		<img src="../images/list.jpg">
      	</div>
      		<a href="#user"><img id="snDP" class="circle" src="../images/icons/72.png"></a>
      		<a href="#name"><span id="snName" class="white-text name">Nikhil Sujith</span></a>
      		<a href="#regno"><span id="snID" class="white-text email">nik98hil@gmail.com</span></a>
    	</div>
    </li>
    	<li><a class="modal-trigger" href="#joinClassModal"><i class="material-icons">school</i>Join New Class</a></li>
    	<li><a href="#!" onclick="showClassmates();"><i class="material-icons">group</i>Classmates</a></li>
    	<li><div class="divider"></div></li>
    	<li><a class="subheader">Subheader</a></li>
    	<li><a class="waves-effect" href="#!"><i class="material-icons">clear</i>Sign Out</a></li>
  </ul>
  <!--card container-->
	<div class="container">
		<div class="row">

			<!--Card 1-->
			<a href="#" onclick="subjectOpen()">
				<div class="col s6">
					<div class="card">
						<div class="card-image"> 
							<img src="../images/list.jpg">
							<span id="subjectName" class="card-title">Networks</span>
						</div>
						<div class="card-content">			
							<div class="collection">
								<a href="#" onclick="subjectOpen()" class="collection-item"><span class="badge" id="assignNo">1</span>Assignments</a>
								
								<a class="collection-item sidenav-trigger" data-target="notes-nav"><span id="notesNo" class="badge">4</span>Notes</i></a>

								<a href="#announceModal" class="collection-item modal-trigger"><span id="announceNo" class="badge">5</span>Annoucements</a>
							</div>
						</div>
					</div>
				</div>
			</a>
			<!--end of card 1-->

		</div>
	</div>
	<!-- end card container-->
 

 <!-- Modal Structure -->

 <!--Join a new class -->
  <div id="joinClassModal" class="modal">
    <div class="modal-content">
    	<img src="../images/icons/192.png" class="center2"/>
      <h5>Join New Class</h5>
       <div class="input-field col s6">
          <input placeholder="Enter Class Code Here" id="first_name" type="text" class="validate">
        </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Submit</a>
    </div>
  </div>

  <!-- Announcement modal -->
  <div id="announceModal" class="modal">
    <div class="modal-content">
    	<img src="../images/icons/192.png" class="center2"/>
      <h4>Announcements</h4>
      <center>
      <ul type="disc">
      	<php include 'pullFromDb.php'; ?>
      </ul>
  </center>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
  <!-- end of announcement modal-->

   <!--Notes Side Navigation Bar-->
   <ul id="notes-nav" class="sidenav">
   	<div>
    		<table class="responsive-table highlight"> 
	        <thead>
	          <tr>
	              <th>Lecture Notes</th>
	          </tr>
	        </thead>
	        <tbody>
	          <tr>
	            <td>9/9/18</td>
	            <td>TCP/IP</td>
	          </tr>
	          <tr>
	          	<td>9/9/18</td>
	            <td>IP Header</td>	        
	          </tr>
	          <tr>
	          	<td>9/9/18</td>
	            <td>R-Login</td>	            
	          </tr>
	        </tbody>
	     </table>

	     <table class="responsive-table highlight"> 
	        <table class="responsive-table highlight"> 
	        <thead>
	          <tr>
	              <th>Reference</th>
	          </tr>
	        </thead>
	        <tbody>
	          <tr>
	          	<td>9/9/18</td>
	            <td>TCP/IP</td>
	          </tr>
	          <tr>
	          	<td>9/9/18</td>
	            <td>IP Header</td>
	          </tr>
	          <tr>
	          	<td>9/9/18</td>
	            <td>R-Login</td>
	          </tr>
	        </tbody>
	     </table>

	     <table class="responsive-table highlight" id="peer"> 
	        <thead>
	          <tr>
	              <th>Peer Notes</th>
	          </tr>
	        </thead>
	        <tbody>
	          <tr>
	          	<td>9/9/18</td>
	            <td>TCP/IP</td>
	          </tr>
	          
	        </tbody>
	     </table>
	</div>
  </ul>
  <!-- end Note Side Nav Bar-->


</main>
		
<!--Footer-->
<footer class="page-footer" style="padding-top:0px;">
	<div class="footer-copyright">
		<div class="container" id="footerText">
			<a href="#" target="_blank" title="OMEGA" style="color:#FFFFFF">&emsp;Omega&emsp;</a>
		</div>
	</div>
</footer>

<!--JavaScript at end of body for optimized loading-->
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
			
			<!-- Slide Navigation Bar JS-->
			<script>
				 document.addEventListener('DOMContentLoaded', function() {
			    var elems = document.querySelectorAll('.sidenav');
			    var instances = M.Sidenav.init(elems, 'edge');
  				});
			</script>

			<!--Button tooltips JS-->
			<script>
				document.addEventListener('DOMContentLoaded', function() {
				    var elems = document.querySelectorAll('.tooltipped');
				    var instances = M.Tooltip.init(elems);
				  });
			</script>

			<!-- Modal JS-->
			<script>
				 document.addEventListener('DOMContentLoaded', function() {
				    var elems = document.querySelectorAll('.modal');
				    var instances = M.Modal.init(elems, 'noScrolling');
				  });
				</script>

			<script>
				// Get rid of the loader after three seconds
				setTimeout(function(){
					document.getElementById("progressBar").style.display="none";
					document.getElementById("pageContents").style.display="block";
					},0);
			</script>

			<!--Go to StudentAssign-->
			<script>
			function subjectOpen(){
				var subjName = document.getElementById("subjectName").innerHTML;
				var studID = document.getElementById("snID").innerHTML;
				window.location.href = "../studentAssign/index.php?student=" + studID + "&subname=" + subjName;
			}

		</script>

			<script type="text/javascript" src="https://www.gstatic.com/firebasejs/5.3.0/firebase.js"></script><!--Not loading asynchronously as the following script is dependant on this-->
			<script type="text/javascript">
				// Initialize Firebase
				var config = {
				  apiKey: "AIzaSyA5deESjwYhl6_zs2seCmwTMNtx3OFLodM",
				  authDomain: "omegaclassrooms.firebaseapp.com",
				  databaseURL: "https://omegaclassrooms.firebaseio.com",
				  projectId: "omegaclassrooms",
				  storageBucket: "omegaclassrooms.appspot.com",
				  messagingSenderId: "230656441501"
				};
				firebase.initializeApp(config);
			</script>
		</main>

	<script>
		function getHttpAsync(link, callback){
				var xmlHttp = new XMLHttpRequest();
				xmlHttp.onreadystatechange = function(){ 
					if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
					callback(xmlHttp.responseText);
				}
				xmlHttp.open("GET", link, true);
				xmlHttp.send(null);
			}
			function results(data){
				document.getElementById("snDP").src = JSON.parse(data).users[1].photo;
				document.getElementById("snName").innerHTML = JSON.parse(data).users[1].fn;
				document.getElementById("snID").innerHTML = JSON.parse(data).users[1].rno;
			}
		window.onload = function(){
				getHttpAsync("../api/users/?key=WNetcNnHuxs2VjwtjfBA78m3whhMZV5dXddKXQrTkMLVvq75HpESRLf9GawVpef4&transform=1", results);
		}
	</script>

	</body>
</html>
