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
						<li>
	<a href="../student/index.php" class="btn-flat tooltipped" data-position="bottom" data-tooltip="Dashboard"><i class="tiny material-icons icon-white">dashboard</i></a>
						</li>

						<li>
							<a class="btn-flat tooltipped" data-position="bottom" data-tooltip="Announcements"><i class="tiny material-icons icon-white">announcements</i></a>
						</li>

						<li>
							<a class="btn-flat tooltipped" data-position="bottom" data-tooltip="Assignments"><i class="tiny material-icons icon-white">assignments</i></a>
						</li>

						<li>
							<a class="btn-flat tooltipped" data-position="bottom" data-tooltip="Notes"><i class="tiny material-icons icon-white">library_books</i></a>
						</li>
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
      		<a href="#user"><img class="circle" src="../images/icons/72.png"></a>
      		<a href="#name"><span class="white-text name">John Doe</span></a>
      		<a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    	</div>
    </li>
    	<li><a href="#!" onclick="askClassCode();"><i class="material-icons">school</i>Join New Class</a></li>
    	<li><a href="#!" onclick="showClassmates();"><i class="material-icons">group</i>Classmates</a></li>
    	<li><div class="divider"></div></li>
    	<li><a class="subheader">Subheader</a></li>
    	<li><a class="waves-effect" href="#!"><i class="material-icons">clear</i>Sign Out</a></li>
  </ul>
	<div class="container">
		<div class="row">
			<!--Card 1-->
			<a href="index.html">
				<div class="col s6">
					<div class="card">
						<div class="card-image"> 
							<img src="../images/list.jpg">
							<span class="card-title"> Networks </span>
						</div>
						<div class="card-content">			
							<div class="collection">
								<a href="#!" class="collection-item"><span class="badge">1</span>Assignments</a>
								<a href="#!" class="collection-item"><span class="badge">4</span>Notes</a>
								<a href="#!" class="collection-item"><span class="badge">10</span>Annoucements</a>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
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

			<script>
				// Get rid of the loader after three seconds
				setTimeout(function(){
					document.getElementById("progressBar").style.display="none";
					document.getElementById("pageContents").style.display="block";
					},0);
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
	</body>
</html>
