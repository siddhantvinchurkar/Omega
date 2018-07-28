<!DOCTYPE html>
<html lang="en" >
	<head>
		<title>Omega</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Basic meta tags-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!--Fetch local style resources-->
		<link rel="stylesheet" href="../css/tstyle.css" media="none" onload="if(media!='screen,projection')media='screen,projection'">
		<!--Fetch minified normalizecss from the CDN asynchronously-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" media="none" onload="if(media!='screen,projection')media='screen,projection'">
		<!--Fetch minified materializecss from the CDN asynchronously-->
		<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css" media="none" onload="if(media!='screen,projection')media='screen,projection'">
		<!--Fetch font (Roboto) from the CDN asynchronously-->
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
		<!--Set the shortcut icon-->
		<link rel="shortcut icon" type="image/ico" href="../images/icons/favicon.ico">
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Progressive Web App meta tags-->
		<link rel="manifest" href="../manifest.json">
		<meta name="theme-color" content="#EE6E73">
		<meta name="Description" content="Omega is a collaborative classroom platform for teachers and students alike.">
		<style>
			body {
			display: flex;
			min-height: 100vh;
			flex-direction: column;
			font-family: 'Roboto', sans-serif;
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
			.left-center {
			width: 250px;
			position: left;
			margin: auto;
			top: 0;
			right: 0;
			bottom: 100;
			left: 0;
			}
		</style>
	</head>
	<body>
		<!--Header-->
		<header>
			<nav>
				<div class="nav-wrapper">
					<img src="../images/icons/72.png" style="height:95%;" />
					<a href="" class="brand-logo">Omega</a>
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
    				</div>
    			</li>
    				<li><a href="#!" onclick="askClassCode();"><i class="material-icons">school</i>Add New Subject</a></li>
    				<li><a href="#!" onclick="showClassmates();"><i class="material-icons">group</i>Classmates</a></li>
    				<li><div class="divider"></div></li>
    				<li><a class="subheader">Subheader</a></li>
    				<li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  			</ul>
  			<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="medium material-icons">chevron_right</i></a>
		</header>
		<!--Main-->
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
				<div class="com">
					<div class="com__content">
						<section class="com__section">
							<h1 class="animate slideInLeft">I Year BCA</h1>
							<p class="animate slideInLeft delay-1">First year BCA.....</p>
						</section>
						<section class="com__section">
							<h1 class="animate slideInLeft">II Year BCA</h1>
							<p class="animate slideInLeft delay-1">2nd year BCA.....</p>
						</section>
						<section class="com__section">
							<h1 class="animate scaleIn">III Year BCA</h1>
							<p class="animate slideInLeft delay-1">Final year BCA.....</p>
						</section>
						<section class="com__section">
							<h1 class="animate slideInLeft">I Year PMC</h1>
							<p class="animate slideInLeft delay-1">First year PMC.....</p>
						</section>
						<section class="com__section">
							<h1 class="animate slideInLeft">II Year PMC</h1>
							<p class="animate slideInLeft delay-1">2nd year PMC.....</p>
						</section>
						<section class="com__section">
							<h1 class="animate scaleIn">III Year PMC</h1>
							<p class="animate slideInLeft delay-1">Final year PMC.....</p>
						</section>
						<section class="com__section">
							<h1 class="animate slideInLeft">I Year MEC</h1>
							<p class="animate slideInLeft delay-1">First year MEC.....</p>
						</section>
						<section class="com__section">
							<h1 class="animate slideInLeft">II Year MEC</h1>
							<p class="animate slideInLeft delay-1">2nd year MEC.....</p>
						</section>
						<section class="com__section">
							<h1 class="animate scaleIn">III Year MEC</h1>
							<p class="animate slideInLeft delay-1">Final year MEC.....</p>
						</section>
					</div>
					<nav class="com__nav">
						<ul class="com__nav-list">
							<li class="com__nav-item1">
								<a href="" class="com__nav-link">
									<h4>I BCA</h4>
									<span class="white-line animate scaleInLeft delay-2"></span>
									<span class="white-line animate scaleInLeft delay-3"></span>
								</a>
							</li>
							<li class="com__nav-item1">
								<a href="" class="com__nav-link">
									<h4>II BCA</h4>
									<span class="white-line animate scaleInLeft delay-2"></span>
									<span class="white-line animate scaleInLeft delay-3"></span>
								</a>
							</li>
							<li class="com__nav-item1">
								<a href="" class="com__nav-link">
									<h4>III BCA</h4>
									<span class="white-line animate scaleInLeft delay-2"></span>
									<span class="white-line animate scaleInLeft delay-3"></span>
								</a>
							</li>
							<li class="com__nav-item2">
								<a href="" class="com__nav-link">
									<h4>I PMC</h4>
									<span class="white-line animate scaleInLeft delay-2"></span>
									<span class="white-line animate scaleInLeft delay-3"></span>
								</a>
							</li>
							<li class="com__nav-item2">
								<a href="" class="com__nav-link">
									<h4>II PMC</h4>
									<span class="white-line animate scaleInLeft delay-2"></span>
									<span class="white-line animate scaleInLeft delay-3"></span>
								</a>
							</li>
							<li class="com__nav-item2">
								<a href="" class="com__nav-link">
									<h4>III PMC</h4>
									<span class="white-line animate scaleInLeft delay-2"></span>
									<span class="white-line animate scaleInLeft delay-3"></span>
								</a>
							</li>
							<li class="com__nav-item3">
								<a href="" class="com__nav-link">
									<h4>I MEC</h4>
									<span class="white-line animate scaleInLeft delay-2"></span>
									<span class="white-line animate scaleInLeft delay-3"></span>
								</a>
							</li>
							<li class="com__nav-item3">
								<a href="" class="com__nav-link">
									<h4>II MEC</h4>
									<span class="white-line animate scaleInLeft delay-2"></span>
									<span class="white-line animate scaleInLeft delay-3"></span>
								</a>
							</li>
							<li class="com__nav-item3">
								<a href="" class="com__nav-link">
									<h4>III MEC</h4>
									<span class="white-line animate scaleInLeft delay-2"></span>
									<span class="white-line animate scaleInLeft delay-3"></span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</main>
		<!--Footer-->
		<footer class="page-footer" style="padding-top:0px;">
			<div class="footer-copyright">
				<div class="container" id="footerText">
					<a href="https://volatile.ga/" target="_blank" title="Volatile, Inc." style="color:#FFFFFF">&emsp;Volatile, Inc.&emsp;</a>
					<a class="grey-text text-lighten-4 right" href="">Made with love for everyone</a>
				</div>
			</div>
		</footer>
		<!--JavaScript at end of body for optimized asynchronous loading-->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

		<!--Not loading asynchronously as tindex.js is dependant on this-->
		<script type="text/javascript" src="../js/tindex.js" async></script>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
		<script>
				 document.addEventListener('DOMContentLoaded', function() {
			    	var elems = document.querySelectorAll('.sidenav');
			    	var instances = M.Sidenav.init(elems, 'edge middle');
  				});
		</script>
		<script type="text/javascript" src="https://www.gstatic.com/firebasejs/5.3.0/firebase.js"></script> <!--Not loading asynchronously as the following script is dependant on this-->
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

		<!--Onload Function-->
		<script type="text/javascript">
			window.onload = function(){
			
				// Set the copyright year in the footer
				document.getElementById("footerText").innerHTML = '&copy; ' + new Date().getFullYear() + document.getElementById("footerText").innerHTML;
			
				// Get rid of the loader after three seconds
				setTimeout(function(){
					document.getElementById("progressBar").style.display="none";
					document.getElementById("pageContents").style.display="block";
					}, 3000);
			
			}
			
		</script>
	</body>
</html>