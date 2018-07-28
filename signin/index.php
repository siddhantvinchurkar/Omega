<!DOCTYPE html>
<html lang="en">
	<head>
		<!--Basic meta tags-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!--Fetch minified materializecss from the CDN asynchronously-->
		<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css"  media="none" onload="if(media!='screen,projection')media='screen,projection'">
		<!--Fetch material icons from the CDN asynchronously-->
		<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" media="none" onload="if(media!='screen,projection')media='screen,projection'">
		<!--Fetch fontawesome icons from the CDN asynchronously-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous" media="none" onload="if(media!='screen,projection')media='screen,projection'">
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
		</style>
		<title>Omega</title>
	</head>
	<body>
		<!--Header-->
		<header>
			<nav>
				<div class="nav-wrapper">
					<img src="../images/icons/72.png" style="height:95%;" />
					<a href="" class="brand-logo">Omega</a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="https://siddhantvinchurkar.me/" target="_blank" title="Siddhant Vinchurkar">Siddhant Vinchurkar</a></li>
					</ul>
				</div>
			</nav>
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
				<div id="signInMessageSpace" class="row" style="margin-top:8em; display:none;">
					<div class="col s12 m6 offset-m3">
						<div class="card horizontal">
							<div class="card-stacked">
								<div class="card-content">
									<p id="signInMessage" style="font-size:1.5em; font-family:'Ubuntu', sans-serif;"></p>
									<br />
									<a id="signOutButton" class="waves-effect waves-light btn right" style="background-color:#FFFFFF; color:#EE6E73;"><i class="material-icons left">exit_to_app</i>Sign Out</a>
									<a id="openEmailButton" class="waves-effect waves-light btn right" style="background-color:#FFFFFF; color:#EE6E73;" target="_blank"><i class="material-icons left">launch</i>Open Email</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--Sign in Card-->
				<div id="signInCard" class="row">
					<div class="col s12 m4 offset-m4">
						<h2 class="header">Sign in</h2>
						<div class="card horizontal">
							<div class="card-stacked">
								<div class="card-content">
									<p style="color:#A6A6A6;"><b>Sign in with your <img src="https://u.imageresize.org/v2/54ba4d24-641f-49c7-b9f0-9600d2c7dfd7.png" style="margin-bottom:-5px;" height="19px" /> or <img src="https://assets-cdn.github.com/images/modules/logos_page/GitHub-Logo.png" height="16px" /> account to continue</b></p>
									<hr />
									<br />
									<div class="row">
										<div class="col s12 m10 offset-m2">
											<a id="google" style="background-color:#FFFFFF; color:#000000;" class="waves-effect waves-light btn"><img src="http://pngimg.com/uploads/google/google_PNG19635.png" height="30px" width="30px" style="margin-bottom:-10px;" />&emsp;<img src="https://u.imageresize.org/v2/54ba4d24-641f-49c7-b9f0-9600d2c7dfd7.png" style="margin-bottom:-5px;" height="19px" /></a>
											<a id="github" style="background-color:#FFFFFF; color:#000000;" class="waves-effect waves-light btn"><i class="fab fa-github"></i>&emsp;<img src="https://assets-cdn.github.com/images/modules/logos_page/GitHub-Logo.png" height="16px" /></a>
										</div>
									</div>
								</div>
							</div>
						</div>
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
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js" async></script>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous" async></script> <!--Not loading asynchronously as the following script is dependant on this-->
		<script src="https://www.gstatic.com/firebasejs/5.3.0/firebase-app.js"></script> <!--Not loading asynchronously as the following script is dependant on this-->
		<script type="text/javascript" src="https://www.gstatic.com/firebasejs/5.3.0/firebase-auth.js"></script> <!--Not loading asynchronously as the following script is dependant on this-->
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
			
			// Create Authentication Provider Objects
			var googleProvider = new firebase.auth.GoogleAuthProvider(); // Google
			var githubProvider = new firebase.auth.GithubAuthProvider(); // GitHub
			
			// Create User Data Objects
			var googleUserData, githubUserData;
			
			// Create User Metadata Objects
			var name, firstName, lastName, email, photoURL;
			
			// Create provider flag
			var providerFlag = 0;
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
			
				// Align the signInMessageSpace
				document.getElementById("signInMessageSpace").style="margin-top:" + window.screen.availHeight/8 + "px;";
			
				// Sign in with Google
				document.getElementById("google").onclick = function(){
					firebase.auth().signInWithRedirect(googleProvider);
					firebase.auth().getRedirectResult().then(function(result) {
					if (result.credential) {
						// This gives you a Google Access Token. You can use it to access the Google API.
						var token = result.credential.accessToken;
					}
					// The signed-in user info.
					var googleUserData = result.user;
					providerFlag = 1;
					}).catch(function(error) {
						// Handle Errors here.
						var errorCode = error.code;
						var errorMessage = error.message;
						// The email of the user's account used.
						var email = error.email;
						// The firebase.auth.AuthCredential type that was used.
						var credential = error.credential;
						alert("An error occurred while signing in with Google. Please try again later.");
					});
				}
			
			}
			
				// Sign in with GitHub
				document.getElementById("github").onclick = function(){
					firebase.auth().signInWithRedirect(githubProvider);
					firebase.auth().getRedirectResult().then(function(result) {
					if (result.credential) {
						// This gives you a GitHub Access Token. You can use it to access the GitHub API.
						var token = result.credential.accessToken;
					}
					// The signed-in user info.
					githubUserData = result.user;
					providerFlag = 2;
					}).catch(function(error) {
						// Handle Errors here.
						var errorCode = error.code;
						var errorMessage = error.message;
						// The email of the user's account used.
						var email = error.email;
						// The firebase.auth.AuthCredential type that was used.
						var credential = error.credential;
						alert("An error occurred while signing in with GitHub. Please try again later.");
					});
				}
			
				// Monitor Session Status
				firebase.auth().onAuthStateChanged(function(user) {
					if (user) {
						
						// User is signed in; retrieve user metadata
						name = user.displayName;
						firstName = user.displayName.substring(0, user.displayName.indexOf(" "));
						lastName = user.displayName.substring(user.displayName.indexOf(" ")+1, user.displayName.length);
						email = user.email;
						photoUrl = user.photoURL;
			
						// Handle Sign In Event
						document.getElementById("signInCard").style.display="none";
						document.getElementById("signInMessageSpace").style.display="block";
						document.getElementById("signInMessage").innerHTML="Welcome to Omega, " + name + "! We've just sent you an email to verify your email address. Visit the link in the email to continue the sign up process. If you don't find the email in your inbox, check your spam and also mark the email as \"not spam\" to avoid future misdeliveries.";
						document.getElementById("openEmailButton").href="https://" + email.substring(email.indexOf("@")+1, email.length) + "/";
						document.getElementById("openEmailButton").innerHTML='<i class="material-icons left">launch</i>Open ' + email.substring(email.indexOf("@")+1, email.indexOf("."));
						console.log("Signed In!");
			
						// TODO: Add internal logic to check if user has already signed up

						var signedup = false;
			
						// If the user has not signed up yet, send confirmation email
						if(!signedup){
							$.get(
								"https://admin.sotf.in/console/sendomegaemail.php",
								{fn : firstName, ln : lastName, eml : email},
								function(data) {
									console.log("%c" + data, "background: #222222; color: #BADA55;");
								}
							);
						}
			
					}
					else {
						// No user is signed in or user signed out; handle sign out event
						document.getElementById("signInCard").style.display="block";
						document.getElementById("signInMessageSpace").style.display="none";
						document.getElementById("signInMessage").innerHTML="";
					}
				});
			
				// Signing out
				document.getElementById("signOutButton").onclick = function(){
					firebase.auth().signOut().then(function() {
						// Sign-out successful; handle sign out event
						document.getElementById("signInCard").style.display="block";
						document.getElementById("signInMessageSpace").style.display="none";
						document.getElementById("signInMessage").innerHTML="";
						console.log("Signed Out!");
					}).catch(function(error) {
						// An error happened; handle sign out failure
						alert("An error occurred while signing out. Please try again later.");
					});
				}
			
		</script>
	</body>
</html>
