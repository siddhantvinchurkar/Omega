<!DOCTYPE html>
<html lang="en" >
	<head>
		<title>Omega</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Basic meta tags-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
			.icon-white {
			    color: white;
		</style>
	</head>
	<body>
		<!--Header-->
		<header>
			<nav>
				<div class="nav-wrapper">
					<img data-target="slide-out" class="sidenav-trigger" src="../images/icons/72.png" style="height:95%; cursor: pointer;" />
					<a href="" class="brand-logo">Omega</a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li>
							<a class='dropdown-trigger btn-flat icon-white' data-target='dropdown1'>All Classes</a>
						</li>

						<li>
							<a id="announceM" class="btn-flat tooltipped waves-effect modal-trigger" href="#announceModal" data-position="bottom" data-tooltip="Announcements"><i class="tiny material-icons icon-white">announcements</i></a>
						</li>

						<li>
							<a id="assignM" class="btn-flat tooltipped waves-effect modal-trigger" href="#assignmentModal" data-position="bottom" data-tooltip="Assignments"><i class="tiny material-icons icon-white">assignments</i></a>
						</li>

						<li>
							<a id="noteM" class="btn-flat tooltipped waves-effect modal-trigger" href="#notesModal" data-position="bottom" data-tooltip="Notes"><i class="tiny material-icons icon-white">library_books</i></a>
						</li>
					</ul>
					<!-- Dropdown Structure -->
  					<ul id='dropdown1' class='dropdown-content'>
    					<li><a href="#1bca"><center>I BCA</center></a></li>
    					<li><a href="#2bca"><center>II BCA</center></a></li>
    					<li><a href="#3bca"><center>III BCA</center></a></li>
    					<li class="divider" tabindex="-1"></li>
    					<li><a href="#1pcm"><center>I PCM</center></a></li>
    					<li><a href="#2pcm"><center>II PCM</center></a></li>
    					<li><a href="#3pcm"><center>III PCM</center></a></li>
    					<li class="divider" tabindex="-1"></li>
    					<li><a href="#1mec"><center>I MEC</center></a></li>
    					<li><a href="#2mec"><center>II MEC</center></a></li>
    					<li><a href="#3mec"><center>III MEC</center></a></li>
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
    				</div>
    			</li>
    				<li><a id="addsubj" href="#subjectModal" class="waves-effect modal-trigger"><i class="material-icons">school</i>Add New Subject</a></li>
    				<li><a href="#!" onclick="showClassmates();"><i class="material-icons">group</i>Classmates</a></li>
    				<li><div class="divider"></div></li>
    				<li><a class="subheader">Subheader</a></li>
    				<li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  			</ul>
		</header>
		<!--Main-->
		<main>
			<!--Progrss Bar-->
			<div class="container">
				<img src="../images/icons/512.png" class="center2" />
				<div class="progress center" id="progressBar">
					<div class="indeterminate" style="margin-right: auto; margin-left: auto; width: 250px;"></div>
				</div>
				<!-- Modal Structure -->
  				<div id="subjectModal" class="modal">
    				<div class="modal-content">
      					<h4>Subject Modal</h4>
      					<p>A bunch of text</p>
    				</div>
    				<div class="modal-footer">
      					<a href="#" class="modal-close waves-effect btn-flat">Create</a>
    				</div>
  				</div>

  				<div id="announceModal" class="modal">
    				<div class="modal-content">
      					<h4>Announcements Modal</h4>
      					<p>A bunch of text</p>
    				</div>
    				<div class="modal-footer">
      					<a href="#" class="modal-close waves-effect btn-flat">Create</a>
    				</div>
  				</div>

  				<div id="assignmentModal" class="modal">
    				<div class="modal-content">
      					<h4>Assignment Modal</h4>
      					<p>A bunch of text</p>
    				</div>
    				<div class="modal-footer">
      					<a href="#" class="modal-close waves-effect btn-flat">Create</a>
    				</div>
  				</div>

  				<div id="notesModal" class="modal">
    				<div class="modal-content">
      					<h4>Notes Modal</h4>
      					<p>A bunch of text</p>
    				</div>
    				<div class="modal-footer">
      					<a href="#" class="modal-close waves-effect blue btn-flat">Create</a>
    				</div>
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

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
		<script>
				 document.addEventListener('DOMContentLoaded', function() {
			    	var elems = document.querySelectorAll('.sidenav');
			    	var instances = M.Sidenav.init(elems, 'edge middle');

			    	var elemsD = document.querySelectorAll('.dropdown-trigger');
    				var instancesD = M.Dropdown.init(elemsD, closeOnClick='true');

    				var elemsM = document.querySelectorAll('.modal');
    				var instancesM = M.Modal.init(elemsM, '');
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

				document.getElementById("addsubj").onclick = function(){
					instancesM[0].open();
				}
				document.getElementById("announceM").onclick = function(){
					instancesM[0].open();
				}
				document.getElementById("assignM").onclick = function(){
					instancesM[0].open();
				}
				document.getElementById("noteM").onclick = function(){
					instancesM[0].open();
				}
			
			}
			
		</script>
	</body>
</html>