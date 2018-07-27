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
		<link rel="shortcut icon" type="image/ico" href="images/icons/favicon.ico">
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Progressive Web App meta tags-->
		<link rel="manifest" href="manifest.json">
		<meta name="theme-color" content="#4DB6AC">
		<meta name="Description" content="Programs from web tech lab sessions">
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
			}
		</style>
		<title>OmegaClassrooms</title>
	</head>
	<body>
		<!-- Heading Strip-->
		<header>
			<nav>
				<div class="nav-wrapper">
					<img src="../images/icons/72.png" style="height:95%;" />
					<a href="" class="brand-logo">OMEGA</a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li>
							<a href="index.html">
								<p class="material-icons">arrow_back</p>
							</a>
						</li>
						<li>
							<a href="index.html">
								<p class="material-icons">arrow_forward</p>
							</a>
						</li>
					</ul>
				</div>

			</nav>
<!-- Sliding Navigation Bar -->
  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="../images/list.jpg">
      </div>
      <a href="#user"><img class="circle" src="../images/icons/72.png"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!" onclick="askClassCode();"><i class="material-icons">school</i>Join New Class</a></li>
    <li><a href="#!" onclick="showClassmates();"><i class="material-icons">group</i>Classmates</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="medium material-icons verticalCenter">chevron_right</i></a>

</header>


		<main>
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